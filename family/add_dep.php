<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = mysqli_connect("localhost", "root", "", "example");

  $dep_name = $_POST['dep_name'];

  $sql = "INSERT INTO departments (name) VALUES ('$dep_name')";
  
  if (mysqli_query($conn, $sql)) {
    echo "Record Inserted successfully";
    header('Location: docmanage.php');
    header("Refresh:3");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
    header('Location: docmanage.php');
  }

  mysqli_close($conn);
}
?>
 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = mysqli_connect("localhost", "root", "", "example");


  if ($conn->query("ALTER TABLE departments AUTO_INCREMENT = 1") &&
  $conn->query("SET @count = 0") &&
  $conn->query("UPDATE departments SET id = @count:= @count + 1")) {
  echo "ID column re-aligned.";
 header("Refresh:0");
} else {
  echo "Error: " . $mysqli->error;
}
  mysqli_close($conn);
}
?>
