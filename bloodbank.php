<html>
    <head>
    <?php include("headder.php"); ?>
        <title>BLOOD BANK</title>
        <link rel="stylesheet" href="log.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <a href="project.php">HOME</a>
        <h2>BLOOD BANK</h2>
        <form action="" method="get">
            <div class="bb">
            <h3>CITY </h3>
			<select name="city" id="1" onClick="yes()">
		<option value="" disabled selected hidden>Choose a City</option>
		<option vakue="amd">Ahmedabad</option>
		<option>Rajkot</option>
		<option>Surat</option>
		<option>Vadodara</option>
	</select>
	<br><br>
	<h3>BLOOD BANK</h3><br>
	<select name="bank" id="2">
	<option value="" disabled selected hidden>Choose Blood Bank</option>
	</select>

	<script type="text/javascript">

		function yes() {
			var x = $("#1 :selected").val();
			console.log(x);
			if(x == 'Ahmedabad')
			{
				$("#2").empty();
				var selectValues = {
				  "1": "Prathama Blood Centre",
				  "2": "Indian Red Cross Society",
				"3": "Lion's Blood Bank"
				};
				var $mySelect = $('#2');
				$.each(selectValues, function(key, value) {
				  var $option = $("<option/>", {
				    value: value,
				    text: value
				  });
				  $mySelect.append($option);
				});
			} else if(x == 'Rajkot') {
				$("#2").empty();
				var selectValues = {
				  "1": "Nathani Blood Bank",
				  "2": "Indian Red Cross Society",
				"3": "Field Marshal Blood Bank"
				};
				var $mySelect = $('#2');
				$.each(selectValues, function(key, value) {
				  var $option = $("<option/>", {
				    value: value,
				    text: value
				  });
				  $mySelect.append($option);
				});
			}
			else if(x == 'Surat') {
				$("#2").empty();
				var selectValues = {
				  "1": "Red Croos BLood Bank",
				  "2": "Lok Samarpan Blood Bank",
				"3": "Saraswat Bank"
				};
				var $mySelect = $('#2');
				$.each(selectValues, function(key, value) {
				  var $option = $("<option/>", {
				    value: value,
				    text: value
				  });
				  $mySelect.append($option);
				});
			}
			else{
				$("#2").empty();
				var selectValues = {
				  "1": "Indu Blood Bank",
				  "2": "Jalaram Blood Bank",
				"3": "Indian Red Cross Society"
				};
				var $mySelect = $('#2');
				$.each(selectValues, function(key, value) {
				  var $option = $("<option/>", {
				    value: value,
				    text: value
				  });
				  $mySelect.append($option);
				});
			}
		}
		</script>
                  <br>
                  <h3>BLOOD TYPE</h3>
                  <select name="blood" required>
                    <option value="" disabled selected hidden>Type of Blood</option>
                    <option value="a+">A+</option>
                    <option value="a-">A-</option>
                    <option value="ab+">AB+</option>
                    <option value="ab-">AB-</option>
                    <option value="b+">B+</option>
                    <option value="b-">B-</option>
                    <option value="o+">O+</option>
                    <option value="o-">O-</option>
                  </select>
                </div>
                <br><br>
                <input type="submit" name="sub" value="Submit">
              </form>
    </body>
</html>