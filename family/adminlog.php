<html>
    <head>
    <link rel="stylesheet" href="adminstyle.css">

</head>
<body>
<?php
// Establish a connection to the WAMP database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "example";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the form data
    $input_username = mysqli_real_escape_string($conn, $_POST["username"]);
    $input_password = mysqli_real_escape_string($conn, $_POST["password"]);
    
    // Query the database to see if the user exists
    $sql = "SELECT * FROM fadmin WHERE username='$input_username' AND password='$input_password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
		// Redirect the user to the admin page
		header('Location: admin.html');
		exit;


	} else {
		// Display an error message
        echo "<p class='error-message '>User not found.</p>";
        echo "<script>setTimeout(function() {window.location.href = 'adminlo.html';}, 1000);</script>";
        exit();
		
	}
}
    // Close the database connection
    mysqli_close($conn);

?>
</body>
</head>
</html>