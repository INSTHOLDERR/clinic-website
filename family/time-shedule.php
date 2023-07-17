<html>
  <head>
  <link rel="stylesheet" href="adminstyle.css">
  <link rel="stylesheet" href="shedule.css">

</head>
    <body>
      

<div id="container">
  
  <div id="left-div" >
    
    <table id="left-table" border="1">
      <tr><td>

      <thead>
  <link rel="stylesheet" href="book-details.css">
    
      <th>Id</th>
      <th>Name</th>
      <th>Department Id</th>

      
    
  </thead>
  <tbody>
  
    <?php
    // establish database connection
    $conn = mysqli_connect("localhost", "root", "", "example");

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // create SQL query
    $sql = "SELECT * FROM doctors LIMIT 1, " . PHP_INT_MAX;

    // execute query
    $result = mysqli_query($conn, $sql);

    // output data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["department_id"] . "</td>";
        
        echo "</tr>";
   
    }

    // close database connection
    mysqli_close($conn);

    ?>
  </tbody>
      </td></tr>
     
    </table>
  </div>
  <div id="right-div" style="height: 450px;overflow-y: scroll;">
    <table id="right-table" border="1">
      <tr><td>
      <thead>
  <link rel="stylesheet" href="book-details.css">
      <th>Id</th>
      <th>Dates</th>
      <th>Doctor-Id</th>
     
  </thead>
  <tbody>

    <?php
    // establish database connection
    $conn = mysqli_connect("localhost", "root", "", "example");

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // create SQL query
    $sql = "SELECT * FROM dates LIMIT 1, " . PHP_INT_MAX;

    // execute query
    $result = mysqli_query($conn, $sql);

    // output data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["doctor_id"] . "</td>";
        echo "</tr>";
        
    }
    


    // close database connection
    mysqli_close($conn);

   
    ?>

      
    </table>
  </div>
  <div id="form-div"  >
    
  <form method="POST" action="">
      <h2>Update Date</h2>
      
        <label for="Id"><b>Id</b></label>
        <input type="text" placeholder="Enter Date Id" name="date_id" >
        <label for="Date"><b>Date</b></label>
        <input type="text" placeholder="Enter Date In YY-MM-DD format" name="date"> 
			  <button type="submit">Update</button>

        <h2>Add New Date</h2>

        <label for="Id"><b>Id</b></label>
        <input type="text" placeholder="Enter Doctor Id" name="doc_id">
        <label for="Date"><b>Date</b></label>
        <input type="text" placeholder="Enter Date In YY-MM-DD format" name="new_date" >
        <label class="show-password-label">
        <button type="submit">Add Date</button>
      
    </form>
    <div id="form-div">
    <form method="POST" action="admin.html">
        <button>HOME</button>
    </form>
   
  </div>
  
</div>




 <!-- Edit Existing Date -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = mysqli_connect("localhost", "root", "", "example");

  $date_id = $_POST['date_id'];
  $new_date = $_POST['date'];

  $sql = "UPDATE dates SET date = '$new_date' WHERE id = '$date_id'";
  
  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header("Refresh:0");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>

 <!-- Add New Date -->


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = mysqli_connect("localhost", "root", "", "example");

  $date_id = $_POST['doc_id'];
  $new_date = $_POST['new_date'];

  $sql="INSERT INTO dates (date, doctor_id) VALUES ('$new_date','$date_id' )";
  
  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header("Refresh:0");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>



 <!-- Refresh With Ordered Ids -->
 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = mysqli_connect("localhost", "root", "", "example");


  if ($conn->query("ALTER TABLE dates AUTO_INCREMENT = 1") &&
  $conn->query("SET @count = 0") &&
  $conn->query("UPDATE dates SET id = @count:= @count + 1")) {
  echo "ID column re-aligned.";
  header("Refresh:0");
} else {
  echo "Error: " . $mysqli->error;
}
  mysqli_close($conn);
}
?>





</body>
</html>