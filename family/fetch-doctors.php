<?php
	if(isset($_POST["department_id"])){
		// PHP code to fetch doctors from the database and populate dropdown
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

		//output first doctor
		$sqlFirstDoctor = "SELECT * FROM doctors LIMIT 1";
        $resultFirstDoctor = $conn->query($sqlFirstDoctor);

        if ($resultFirstDoctor->num_rows > 0) {
          // Output data of the first doctor
          while ($row = $resultFirstDoctor->fetch_assoc()) {
          echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
    }
}

		// Fetch doctors from database based on selected department
		$departmentId = $_POST["department_id"];
		$sql = "SELECT * FROM doctors WHERE department_id = $departmentId";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// Output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
			}
		} else {
			echo "<option value=''>--No Doctors Available--</option>";
		}

		$conn->close();
		
	}
?>
