<html>
    <head>
    <?php include("headder.php"); ?>
        <title>LOGIN PAGE</title>
        <link rel="stylesheet" href="log.css">
       <style>
           .span{
               font-color:blue;
               font-size: 20px;
           }
           </style>
           <script>
               function success()
               {
                   document.getElementById("success").innerHtml = 'logged in!!';

               }
            </script>
    </head>
    <body>
        <a href="project.php">HOME</a>
        <h2>LOGIN FORM</h2>

        <?php
        if(isset($_POST['sub']))
        {
         
                $us=$_POST['una'];
                $pa=$_POST['pwd'];

                $link=mysqli_connect("localhost","root","","healthcare") or die('failed');
                
                    // helper
                    $valquery = "select user,password FROM login";
                    $execute = mysqli_query($link,$valquery);
                    while($row = mysqli_fetch_array($execute))
                    {
                        $user = $row["user"];
                        $pass = $row["password"];

                        if($us==$user && $pa==$pass)
                        {
                            header("location:project.php");
                        }
                    }

                    //helper



               //$res=$link->query("select * from login where user='$us' and password='$pa'");
            


            //    if(mysqli_num_rows($res) >0)
            //    {
            //       // echo "<span class='success'>AUTHORISED USER</span>";
            //      // success();
            //      header('Location : project.php');

            //    }
            //    else
            //    {
            //        echo "<br> TRY AGAIN...";
            //    }
            //     $link->close();

             }
        
        else{
            ?>
        <form action="login.php" method="post">
            <div class="log">
                <label for="una" ><b>USERNAME</b></label><br>
                <input type="text" placeholder="ENTER USERNAME" name="una" required>
                    <br>
                <label for="pwd"><b>PASSWORD</b></label><br>
                <input type="password" placeholder="ENTER PASSWORD" name="pwd" required>
                    
                <button type="submit" name="sub" value="LOGIN">LOGIN</button>

            </div>
            <div>
                <br><br>
                <a href="signup.php" class="right">WANT TO SIGNUP ?</a>
            </div>
            <div id="success"></div>

        </form>

        <?php
        }
        ?>
    </body>
</html>