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
      <th>Name</th>
     
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
    $sql = "SELECT * FROM departments LIMIT 1, " . PHP_INT_MAX;

    // execute query
    $result = mysqli_query($conn, $sql);

    // output data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "</tr>";
        
    }
    


    // close database connection
    mysqli_close($conn);

   
    ?>

      
    </table>
  </div>
  <div id="form-div">
    
  <form method="POST" action="add_dep.php">
      <h2>Add New Department</h2>
      
        <label for="Id"><b>Department Name</b></label>
        <input type="text" placeholder="Enter New Department" name="dep_name" > 
		<button type="submit">Add</button>

        <div>
        </form>

        <form method="POST" action="add_doc.php">

        <h2>Add New Doctor</h2>

        <label for="Id"><b>Department Id</b></label>
        <input type="text" placeholder="Enter Department Id" name="doc_id">
        <label for="Date"><b>Name</b></label>
        <input type="text" placeholder="Enter Doctor Name" name="new_doc" >
        <label class="show-password-label">
        <button type="submit">Add Doctor</button>
       <div>
      
</form>



<div id="form-div">
    
    <form method="POST" action="admin.html">
        <button>HOME</button>
    </form>

  </div>
  
  </div>






</body>
</html>