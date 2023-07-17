
<?php
// connect to the database




// fetch the token from the database
// Connect to the database
$connection = mysqli_connect("localhost", "root", "", "example");

// Query to fetch the last registered patient's name
$query = "SELECT id, name FROM bookings ORDER BY id DESC LIMIT 1";

// Execute the query
$result = mysqli_query($connection, $query);

// Fetch the data and store it in a variable
if ($row = mysqli_fetch_assoc($result)) {
    $patient_name = $row['name'];
    $patient_token=$row['id'];

}

// Close the database connection
mysqli_close($connection);

?>

<!DOCTYPE html>
<html>
<head>
<script>
  window.onpageshow = function(event) {
    if (event.persisted) {
      location.reload();
    }
  };
</script>


  <link rel="stylesheet" type="text/css" href="bkd.css">


  <title>Booking Confirmation</title>
</head>
<body>
<div class="congrats-box">
  <h2>Booking Successfull!</h2>
  <h1>Thank You, <?php echo  $patient_name; ?>!</h1>
  <p>Your booking has been confirmed. Your token number is <?php echo $patient_token; ?>. Please bring this with you to the appointment.</p>
</body>
</html>

<?php

// // fetch receiver's ID and email from database
// $connection = mysqli_connect("localhost", "root", "", "family_clinic");
// $query = "SELECT email FROM bookings ORDER BY id DESC LIMIT 1";
// $result = mysqli_query($connection, $query);
// $row = mysqli_fetch_assoc($result);
// $to = $row['email'];

// // prepare email variables
// $subject = "Hello!";
// $body = "How are you doing today?";
// $headers = "From: rahoofmp01@gmail.com";

// // send email
// if (mail($to, $subject, $body, $headers)) {
//   echo "Email sent successfully to " . $to . "!";
  

// } else {
//   echo "Error sending email.";
// }


?>
