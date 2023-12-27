<!DOCTYPE html>
<html lang="en-US">
       <meta charset="UTF-8">
  <title>Pure Health</title>
  <link rel="shortcut icon" href="logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="aos.css" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
	.submit{
    background-color:#122853;
    color: white;
	
	display:block;
	margin:20px 0px 0px 20px;
	text-align:center;
	border-radius:12px;
	border:2px solid rgb(173, 210, 244);
	padding :14px 110px;
	outline:none;

	cursor:pointer;
	transition:0.25px;
	}

body{
    color:#122853;
}

      </style>
    </noscript>
  </head>
  <?php
session_start();

if (!isset($_SESSION['logged_in_patient'])) {
    header("Location: login.html");
    exit();
}

// Establish database connection (Replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "purehelth";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$loggedInPatient = $_SESSION['logged_in_patient'];

// Fetch patient's information from the database
$queryPatientInfo = "SELECT * FROM patients WHERE patient_phone='$loggedInPatient'";
$resultPatientInfo = $conn->query($queryPatientInfo);

if ($resultPatientInfo->num_rows > 0) {
    $row = $resultPatientInfo->fetch_assoc();
    $firstName = $row['fname'];
    $lastName = $row['lname'];
    $phone = $row['patient_phone'];
    $gender = $row['gender'];
    $age = $row['age'];
}

// Fetch patient's appointments from the database
$queryAppointments = "SELECT * FROM appointments WHERE patient_ph='$loggedInPatient'";
$resultAppointments = $conn->query($queryAppointments);

$conn->close();
?>


  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">

                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
              </div>
          </div>
        </nav>
      </div>

    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="blue">
      <div class="page-header-image" data-parallax="true" style="background-image: url('front2.png')"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="logo.png" alt="Image"/></a></div>
          <div class="h2 title">Puer Hethe</div>
          <p class="category text-white">We are happy to serve you and wish you a speedy recovery, our dear patient.</p>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Google+"><i class="fa fa-google-plus"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>












<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        
            
     
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title" style="color:#122853;">Basic Information</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase" style="color:#122853;">First Name</strong></div>
              <div class="col-sm-8" style="color:#122853;"> <?php echo $firstName; ?> </div>
            </div>


            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase" style="color:#122853;">Last Name</strong></div>
              <div class="col-sm-8" style="color:#122853;"> <?php echo $lastName; ?> </div>
            </div>


            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase" style="color:#122853;">Phone:</strong></div>
              <div class="col-sm-8" style="color:#122853;"> <?php echo $phone; ?> </div>
            </div>


            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase" style="color:#122853;">Gender </strong></div>
              <div class="col-sm-8" style="color:#122853;"> <?php echo $gender; ?> </div>
            </div>


            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase" style="color:#122853;"> Age</strong></div>
              <div class="col-sm-8" style="color:#122853;"> <?php echo $age; ?> </div>
            </div></div></div></div></div></div></div>












<div class="section" id="skill">
  <!-- Place this PHP snippet within the HTML file to display appointments in a table -->
<div class="container">
    <div class="h4 text-center mb-4 title" style="color:#122853;">Your Appointments</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="card-body">

        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('.details-btn').on('click', function() {
            // Toggle visibility of details for the clicked row
            $(this).closest('tr').next('.details-row').toggle();
        });
    });
</script>

<?php
if ($resultAppointments->num_rows > 0) {
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col"> <i class="fa-solid fa-person"></i> First Name</th>';
    echo '<th scope="col"> <i class="fa-solid fa-location-dot"></i> Location</th>';
    echo '<th scope="col"> <i class="fa-regular fa-hospital"> </i>  Chosen Center </th>';
    echo '<th scope="col"></th>'; // Empty header for the button column
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($row = $resultAppointments->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['firstname'] . '</td>';
        echo '<td>' . $row['location'] . '</td>';
        echo '<td>' . $row['chosen_center'] . '</td>';
        echo '<td><button class="details-btn">+</button></td>'; // Plus button for details
        echo '</tr>';
        echo '<tr class="details-row" style="display: none;">'; // Hidden row for additional details
        echo '<td colspan="4">Additional details here</td>'; // Add more cells for detailed information
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo "No appointments found for this patient.";
}
?>
        </div>
    </div>
</div>









<a href="appointment.php ?phone=<?php echo urlencode($loggedInPatient); ?>"> <button style="
background-color:#315bb0; 
	display:block;
	margin:20px 0px 0px 20px;
	text-align:center;
	border-radius:12px;
	border:2px solid rgb(173, 210, 244);
	padding :14px 110px;
	outline:none;
	color:white;
	cursor:pointer;
	transition:0.25px;
position: absolute;
left: 40%;"> Book new appoitment</button></a>
 




    <script src="jquery.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="now-ui-kit.js"></script>
    <script src="aos.js"></script>
    <script src="main.js"></script>
</body>
</html>