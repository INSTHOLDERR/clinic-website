 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = mysqli_connect("localhost", "root", "", "example");

  $d_id = $_POST['doc_id'];
  $name = $_POST['new_doc'];

  $sql="INSERT INTO doctors (name, department_id) VALUES ('$name','$d_id' )";
  
  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header('Location: docmanage.php');
    header("Refresh:5");
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


  if ($conn->query("ALTER TABLE doctors AUTO_INCREMENT = 1") &&
  $conn->query("SET @count = 0") &&
  $conn->query("UPDATE doctors SET id = @count:= @count + 1")) {
  echo "ID column re-aligned.";
 header("Refresh:0");
} else {
  echo "Error: " . $mysqli->error;
}
  mysqli_close($conn);
}
?>
