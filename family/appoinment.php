<!DOCTYPE html>
<html>
<head>
<script>
  // Check if the page is being loaded from the cache
  if (performance.navigation.type === 2 && !performance.getEntriesByType('navigation')[0].persisted) {
    // Refresh the page
    location.reload();
  }
</script>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>Appoinment</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body id="top">

<header>
		<div class="header-top-bar">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<ul class="top-bar-info list-inline-item pl-0 mb-0">
							<li class="list-inline-item"><a href="mailto:chelarifamilyclinic@gmail.com"><i class="icofont-support-faq mr-2"></i>chelarifamilyclinic@gmail.com</a></li>
							<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address Chelari , Malappuram 67317</li>
						</ul>
					</div>
					<div class="col-lg-6">
						<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
							<a href="tel:+919656343725" >
								<span>Call Now : </span>
								<span class="h4">+917356357436</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navigation" id="navbar">
			<div class="container">
				  <a class="navbar-brand" href="index.php">
					  <img src="images/logo.png" alt="" class="img-fluid h-25">
				  </a>
	
				  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icofont-navigation-menu"></span>
			  </button>
		  
			  <div class="collapse navbar-collapse" id="navbarmain">
				<ul class="navbar-nav ml-auto">
				  <li class="nav-item active">
					<a class="nav-link" href="index.php">Home</a>
				  </li>
				   <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
					<li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
	
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department <i class="icofont-thin-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropdown02">
							<li><a class="dropdown-item" href="department.html">Departments</a></li>
						</ul>
					  </li>
	
					  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropdown03">
							<li><a class="dropdown-item" href="doctor.html">Doctors</a></li>
							<li><a class="dropdown-item" href="appoinment.html">Appoinment</a></li>
						</ul>
					  </li>
				   <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
				</ul>
			  </div>
			</div>
		</nav>
	</header>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Book your Seat</span>
          <h1 class="text-capitalize mb-5 text-lg">Appoinment</h1>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="appoinment section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
          <div class="mt-3">
            <div class="feature-icon mb-3">
              <i class="icofont-support text-lg"></i>
            </div>
             <span class="h3">Call for an Emergency Service!</span>
              <h2 class="text-color mt-3">+917356357436 </h2>
          </div>
      </div>

      <div class="col-lg-8">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color">Book an appoinment</h2>
            <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of family medicine.</p>
            <b><p class="mb-4">Choose the Department and Doctor for easy Booking...!!</p></b>
			<h3 id="msg"></h3>
               <form id="appoinment" class="appoinment-form" method="POST" action="">
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">    
      <select class="form-control" id="department" name="department">
			<option value="">Department</option>
			<?php
				// PHP code to fetch departments from the database and populate dropdown
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

				// SQL query to fetch departments
				$sql = "SELECT * FROM departments";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// Output data of each row
					while($row = $result->fetch_assoc()) {
						echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
					}
				} else {
					echo '<option value="">No departments found</option>';
				}

				$conn->close();
			?>
		</select>

           </div>
               </div>
                    <div class="col-lg-6">
                        <div class="form-group">
      <select class="form-control" id="doctor" name="doctor">
			<option value="">Select Department First</option>
		</select>

    </div>
    </div>

   <div class="col-lg-12">
   <div class="form-group">
								
                <select class="form-control" id="date" name="date">
		            <option value="">Select Doctor First</option>
		</select>

						  
                            </div>
                        </div>
						<!--<div class="col-lg-6">
                            <div class="form-group">
							<select class="form-control" id="output1" name="output1" value="output1" required>
						    </select>
                            </div>
                        </div>-->
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="Number" class="form-control" placeholder="Phone Number" required>
                            </div>
                        </div>


						<div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Email Adress" required>
                            </div>
                        </div>
						
						<div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="date" class="form-control" required>
								
                            </div>
                        </div>
						
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                    </div>
					<div class="col-lg-6">
						<div class="form-group">
							<input name="today" id="today" type="hidden" class="form-control" readonly>
						</div>
					</div>
					<input class="btn btn-main btn-round-full" type="submit" id="sub">
                </form>

				<?php
    
	require 'configex.php';

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get form values
        $department_id = $_POST['department'];
        $doctor_id = $_POST['doctor'];
        $date = $_POST['date'];
		$name= $_POST['name'];
        $phone= $_POST['phone'];
        $bdate= $_POST['today'];
		$message= $_POST['message'];
		$email= $_POST['email'];

        // Fetch department name
        $department_query = "SELECT name FROM departments WHERE id = $department_id";
        $department_result = mysqli_query($conn, $department_query);
        $department_row = mysqli_fetch_assoc($department_result);
        $department_name = $department_row['name'];

        // Fetch doctor name
        $doctor_query = "SELECT name FROM doctors WHERE id = $doctor_id";
        $doctor_result = mysqli_query($conn, $doctor_query);
        $doctor_row = mysqli_fetch_assoc($doctor_result);
        $doctor_name = $doctor_row['name'];

        // Insert into database
        $query = "INSERT INTO bookings (department, doctor, date,name,phone,bdate,message,email) VALUES (
            (SELECT name FROM departments WHERE id = $department_id),
            (SELECT name FROM doctors WHERE id = $doctor_id),'$date','$name','$phone','$bdate','$message','$email')";
        $result= mysqli_query($conn, $query);

		if ($result && mysqli_affected_rows($conn) > 0) {
			// Insertion successful
			echo "Record inserted successfully.";
		} else {
			// Insertion failed or no rows affected
			echo "Error: " . mysqli_error($conn);
		}

		if ($conn->query($sql) == TRUE) {

			if ($conn->query("ALTER TABLE bookings AUTO_INCREMENT = 1") &&
			$conn->query("SET @count = 0") &&
			$conn->query("UPDATE bookings
			 SET id = @count:= @count + 1")) {
			//echo "ID column re-aligned.";
		    header("Refresh:0");
		  } else {
		  echo "Error: " ;
		  }
	 		mysqli_close($conn);
		  

	 		//echo "Record inserted successfully.";
	 		echo "<script>setTimeout(function() {window.location.href = 'booked.php';}, 1000);</script>";
	 		exit();
			
		
			
		    
	    } else {

		//echo "Record Missing Items.";
        
       
        }


		 

        // Close connection
        mysqli_close($conn);
    }

?>


            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="images/logo.png" alt="" class="img-fluid">
					</div>
					<p>Family_Clinic is a clinic or health care facility that provides both general and specialist examinations and treatments for a wide variety of diseases and injuries to outpatients and is usually independent of a hospital.</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href=""><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="icofont-instagram"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="icofont-google-map"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Department</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="department-rmo.html">Geneal Medicine </a></li>
						<li><a href="department-diabet.html">Family Medicine</a></li>
						<li><a href="department-pead.html">Peadiactric</a></li>
						<li><a href="department-neur.html">Ortho-Neuro</a></li>
						<li><a href="department-derm.html">Dermatology</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Department</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="department-gynac.html">Gynecology</a></li>
						<li><a href="department-psych.html">Psychatrist</a></li>
						<li><a href="department-pulm.html">Pulmonologist</a></li>
						<li><a href="department-orth.html">Ortho</a></li>
						<li><a href="department-ent.html">ENT</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Get in Touch</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Support Available for 24/7</span>
						</div>
						<h4 class="mt-2"><a href="mailto:chelarifamilyclinic@gmail.com">chelarifamilyclinic@gmail.com</a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Mon to Sun : 08:30 - 08.30</span>
						</div>
						<h4 class="mt-2"><a href="tel:+91-7356357436">+91-7356357436</a></h4>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reserved to Family_Clinic <span class="text-color"></span> by <a href="">Rahoof MP, Hridya, Gokul, Nikhil, Amjadh</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>

			
			<div class="row">
				<div class="col-lg-4">
					<a class="whatsapp" href="https://api.whatsapp.com/send?phone=917356357436">
						<div data-toggle="tooltip" data-placement="left" title="" class="whats_tool_tip" data-original-title="Message us"></div>
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" class="wh-messenger-svg-whatsapp wh-svg-icon"><path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path>
						</svg>
					  
					</a>
				</div>
			</div>



		</div>
	</div>
</footer>
    <!-- 
    Essential Scripts
    =====================================-->




    <!-- Main jQuery -->








  
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

  </body>
  <script>
	var date = new Date();
	var year = date.getFullYear();
	var month = date.getMonth()+1;
	var time = date.getHours();
	var time1 = date.getMinutes();
	var time2 = date.getSeconds();
	var todayDate = String(date.getDate()).padStart(2,'0');
	var datePattern = year + '-' + month + '-' + todayDate + '   '  + time + ':' + time1 + ':' + time2;
	document.getElementById("today").value = datePattern;
</script>
<script>
		$(document).ready(function(){
			// When department is selected
			$('#department').on('change', function(){
				var department_id = $(this).val();
				if(department_id){
					$.ajax({
						url: 'fetch-doctors.php',
						type: 'POST',
						data: {department_id: department_id},
						success: function(html){
							$('#doctor').html(html);
							$('#date').html('<option value="">Select Doctor First</option>');
						}
					});
				}else{
					$('#doctor').html('<option value="">Select Department First</option>');
					$('#date').html('<option value="">Select Doctor First</option>');
				}
			});

			// When doctor is selected
			$('#doctor').on('change', function(){
				var doctor_id = $(this).val();
				if(doctor_id){
					$.ajax({
						url: 'fetch-dates.php',
						type: 'POST',
						data: {doctor_id: doctor_id},
						success: function(html){
							$('#date').html(html);
						}
					});
				}else{
					$('#date').html('<option value="">Select Doctor First</option>');
				}
			});
		});
	</script>


  </form>




  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/52/8/common.js">
</script>
<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/52/8/util.js">
</script>
</head>

  