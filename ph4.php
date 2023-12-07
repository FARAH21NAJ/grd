<!DOCTYPE html>
<!--DOCTYPE html-->
<html >
<head>
    <meta charset="UTF-8">

    <title>Pure Health</title>

    <link rel="shortcut icon" href="logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
    <link
      rel="stylesheet" href="login.css"  />

       <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<style>

*{
    margin: 0px;
    padding: 0px;
    font-family: poppins;
    box-sizing: border-box;
    scroll-behavior: smooth;
}

a{
    text-decoration: none;
    color:#122853;
}
ul{
    list-style: none;
}

/* width */
::-webkit-scrollbar {
    width: 7px;
  }
  
  /* Track */
  ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px rgb(233, 233, 233); 
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: rgb(56, 56, 56); 
    border-radius: 10px;
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #1b1b1b; 
  }

body{
    min-height: 700px;
    background-color: #f5f7fb;
   background-image: url(front2.png);
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.navigation{
    display: flex;
    justify-content: space-between;

    align-items: center;
    max-width: 1200px;
    width: 90%;
    margin: 0px auto;
    padding: 30px 0px;
}
.logo{
    color:#122853;
    font-weight: 700;
    font-size: 1.4rem;
}
.logo span{
    background-color: #014dd5;
    color: #ffffff;
    padding: 0px 5px;
    border-radius: 5px;
    font-weight: 600;
    margin-right: 5px;
}
.menu{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: auto;
    margin-left: 40px;
     
}
.menu li a{
    margin: 0px 20px;

    font-weight: 500;
    transition: all ease 0.3s;
}
.menu li a:hover{
    color: #014dd5;
}


p{font-size:40px ;text-align:center ;margin-left:550px ; margin-right:540px;
	position:relative;left:-10px ; padding-bottom:10px; padding-top:10px ;
   width:500px;
    color:#122853;
    background-color: rgba(255,255,255,0.8);
border-radius:50px;

margin-bottom:20px;
    ;}


    .reset {
              background-color: #315bb0;
              display: inline-block;
              text-align: center;
              border-radius: 12px;
              border: 2px solid rgb(173, 210, 244);
              padding: 14px 110px;
              outline: none;
              color: white;
              cursor: pointer;
              transition: 0.2s;
              margin: 0 10px; /* Adjusted margin */
              margin-top: 20px;
              position: relative;
              left: 40%;
          }


    table{
        border-collapse: collapse;
        background-color: rgba(255,255,255,0.8);
	width:800px;
   height: 500px;
   position: relative; bottom: 10px;
   right:55%;

   

    }
    th,td{
        color:#122853;


    }

td{
    text-align:center ;

}
</style>
</head>
<body >
   <nav class="navigation">
                <label for="menu-btn" class="menu-icon">
                <span class="nav-icon"></span>
            </label>
           
            <a href="" class="logo"><span>pure</span>health</a><img src="logo.png" alt="" width="80" height="80">
    <ul class="menu">
        <li><a href="log.html"; style="font-weight: bolder;">Home  </a></li>
        <li><a href="log.html";>Find center </a></li>
        <li><a href="log.html">Our Services</a></li>
        <li><a href="log.html"> Contact us </a></li>
        <li><a href="log.html"> Location </a></li>
        <li><a href="log.html"> Reviws</a></li> </ul>


    </nav>
    <?php
// Replace these variables with your actual database credentials
$host = 'localhost';
$dbname = 'purehelth';
$username = 'root';
$password = '12345678';

try {
    // Connect to the database using PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Prepare SQL query
    $stmt = $pdo->prepare("SELECT patient_name, day, time_slot, payment_status FROM app_book4");

    // Execute the query
    $stmt->execute();

    // Fetch the results as an associative array
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Define an array for day names
    $daysOfWeek = [
        0 => 'Sunday',
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday'
    ];

    // Display results in a table
    if (count($results) > 0) {
        echo "<p> <i class='fa-solid fa-calendar-check'></i> Your Appointments</p>";
        echo "<table border='1'>";
        echo "<tr><th> <i class='fa-solid fa-person'></i> Patient Name</th><th> <i class='fa-regular fa-calendar'></i> Day</th><th> <i class='fa-regular fa-clock'></i>Time Slot</th><th> <i class='fa-regular fa-credit-card'></i> Payment Status</th></tr>";
        foreach ($results as $row) {
            $day = $row['day'];
            $dayName = isset($daysOfWeek[$day]) ? $daysOfWeek[$day] : 'Unknown';
            $paymentStatus = $row['payment_status'] == 1 ? ' The payment was made <i class="fa-solid fa-check"></i>' : 'The payment wasn\'t made <i class="fa-solid fa-xmark"></i>';
            echo "<tr>";
            echo "<td>" . $row['patient_name'] . "</td>";
            echo "<td>" . $dayName . "</td>";
            echo "<td>" . $row['time_slot'] . "</td>";
            echo "<td>" . $paymentStatus . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No records found";
    }
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>



<a href="ph1.html"> <button class="reset"> Back </button></a>





</body>

</html>