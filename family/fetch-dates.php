<?php
	if(isset($_POST["doctor_id"])){
		// PHP code to fetch dates from the database and populate dropdown
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "example";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		 // Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

				//output first date
				$sqlFirstDate = "SELECT * FROM dates LIMIT 1";
				$resultFirstDate = $conn->query($sqlFirstDate);
		
				if ($resultFirstDate->num_rows > 0) {
				  // Output data of the first date
				  while ($row = $resultFirstDate->fetch_assoc()) {
				  echo "<option value='" . $row["date"] . "'>" . $row["date"] . "</option>";
			}
		}

		// Fetch dates from database based on selected doctor
		$doctorId = $_POST["doctor_id"];
		$sql = "SELECT * FROM dates WHERE doctor_id = $doctorId";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// Output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<option value='" . $row["date"] . "'>" . $row["date"] . "</option>";
			}
		} else {
			echo "<option value=''>--No Dates Available--</option>";
		}
		$conn->close();
	}
?>
