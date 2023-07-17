<html>
  <head>
  <link rel="stylesheet" href="adminstyle.css">
  <link rel="stylesheet" href="shedule.css">

</head>
    <body>
      

<div id="container">
  
  <div id="col-50" >
    
    
  <link rel="stylesheet" href="book-details.css">
    
    
    
  </thead>
  <tbody>
  
   
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
      <th>Name</th>
      <th>Dates</th>
      <th>Department</th>
      <th>doctor</th>
     
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
    $sql = "SELECT * FROM bookings";

    // execute query
    $result = mysqli_query($conn, $sql);

    // output data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["department"] . "</td>";
        echo "<td>" . $row["doctor"] . "</td>";
        
        echo "</tr>";
       
       
       
    }
    


    // close database connection
    mysqli_close($conn);

   
    ?>

      
    </table>
  </div>
  
  <div id="form-div">

    <!-- Appointment Editing Form -->


  <form method="POST" action="">
      <h2>Modify Appointment</h2>
      
        <label for="Id"><b>Id</b></label>
        <input type="text" placeholder="Enter Booking Id" name="id">
			  <button type="submit">Delete Patient</button>
        <label for="Id"><b>Department Name</b></label>
        <input type="text" placeholder="Enter Department Name" name="dname" >
        <button type="submit">Delete Department</button>
      
    </form>
  </div>

</div>
<form method="POST" action="admin.html">
        <button>HOME</button>
    </form>

 <!-- Delete Patient With Id -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = mysqli_connect("localhost", "root", "", "family_clinic");

  $date_id = $_POST['id'];
 

  $sql = "DELETE FROM bookings WHERE id = '$date_id'";
  
  if (mysqli_query($conn, $sql)) {
    echo "Record Deleted successfully";
    header("Refresh:0");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>

 <!-- Deelete Entire Data Of Given Department -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = mysqli_connect("localhost", "root", "", "family_clinic");

  $dep_id = $_POST['dname'];
 

  $sql = "DELETE FROM bookings WHERE department_id = '$dep_id'";

  
  if (mysqli_query($conn, $sql)) {
    echo "Record Deleted successfully";
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
  $conn = mysqli_connect("localhost", "root", "", "family_clinic");


  if ($conn->query("ALTER TABLE bookings AUTO_INCREMENT = 1") &&
  $conn->query("SET @count = 0") &&
  $conn->query("UPDATE bookings SET id = @count:= @count + 1")) {
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