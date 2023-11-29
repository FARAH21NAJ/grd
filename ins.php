<html>
<head>
<title> pure health </title>
<body>
<?php


$db1=mysqli_connect("localhost","root","12345678");

mysqli_select_db($db1,"purehelth");


$phonee=$_POST["phnum"];
$dato=$_POST["datee"];
$ff=$_POST["fname"];
$ll=$_POST["lname"];
$gender=$_POST["gen"];
$age=$_POST["age1"];
$snn=$_POST["snn1"];
$past=$_POST["paso"]; 


$b1="insert into patients (patient_phone,	DateBirth, fname,	lname,	gender,	age, snn, pass) values('$phonee','$dato','$ff','$ll','$gender','$age','$snn','$past')";



         mysqli_query($db1,$b1);
		 
   header("Location:http://localhost/grd/login.html");

   


 mysqli_close($db1);

 
/* // Include the Twilio PHP library
require_once 'path/to/twilio-php/autoload.php';

use Twilio\Rest\Client;

// Your Twilio credentials
$accountSid = 'your_account_sid';
$authToken  = 'your_auth_token';

// Create a Twilio client
$client = new Client($accountSid, $authToken);

// Fetch user's phone number from the database (replace with your database connection and query)
$userId = 123; // Replace with the actual user ID
$phoneNumber = ''; // Retrieve the phone number from the database based on the user ID

// Send an SMS
$message = $client->messages->create(
    $phoneNumber,
    array(
        'from' => 'your_twilio_phone_number',
        'body' => 'Hello, this is a test message!'
    )
);

// Output a success or error message based on the result
if ($message->sid) {
    echo 'SMS sent successfully!';
} else {
    echo 'Error sending SMS: ' . $message->errorMessage;
}*/
?>
</body>
</html>