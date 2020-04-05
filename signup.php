<html>
    <head>
    <?php include("headder.php"); ?>
        <title>LOGIN PAGE</title>
        <link rel="stylesheet" href="log.css">
    </head>
    <body>
        <a href="project.php">HOME</a>
        <h2>SIGNUP FORM</h2>
        <?php
        if(isset($_REQUEST['sub']))
        {
            $sub=$_REQUEST['sub'];
            if($sub=="SIGN UP")
            {
                $us=$_REQUEST['una'];
                $pa=$_REQUEST['pwd'];

                $link=new mysqli("localhost","root","","healthcare");
                $link->query("insert into login values('$us','$pa')");
                $link->close();

                echo "<br> RECORD INSERTED SUCESSFULLY";
            }
        }
        else{
            ?>


        <form action="signup.php" method="post">
            <div class="log">
                <label for="una" ><b>USERNAME</b></label><br>
                <input type="text" placeholder="ENTER USERNAME" name="una" required>
                    <br>
                <label for="pwd"><b>PASSWORD</b></label><br>
                <input type="password" placeholder="ENTER PASSWORD" name="pwd" required>
                    
                <button type="submit" name="sub" value="SIGN UP">SIGN UP</button>

            </div>

        </form>
<?php

        }
        ?>

    </body>
</html>