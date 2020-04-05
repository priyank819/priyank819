<html>
    <head>
    <?php include("headder.php"); ?>
        <title>Appointment</title>
        <link rel="stylesheet" href="log.css">
       
    </head>
    <body>

    <a href="project.php">HOME</a>
        <h2>Appointment</h2>
        <form action="login.php" method="get">
            <div class="log">
            <label for="appoint"><b>CHOOSE DATE</b></label><br>

            <input type="date" id="appoint" name="appoint">

            <select name="city" id="1" onClick="yes()">
		<option value="" disabled selected hidden>Choose a Time</option>
		<option vakue="amd">10:00 am - 11:00 am</option>
		<option>11:00 am - 12:00 pm</option>
		<option>12:00  pm - 1:00 pm</option>
        <option>5:00 pm - 6:00 pm</option>
        <option>6:00 pm - 7:00 pm</option>
        <option>7:00 pm - 8:00 pm</option>
	    </select>
                
                    
                <button type="submit" value="LOGIN">LOGIN</button>

            </div>
           


        </form>

    </body>
