<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

require('../sql.php'); // Includes Database Connection

if(isset($_POST['farmerlogin'])) {
  $farmer_email = $_POST['farmer_email'];
  $farmer_password = $_POST['farmer_password'];

  // Secure SQL query with prepared statements
  $stmt = $conn->prepare("SELECT * FROM `farmerlogin` WHERE email = ? AND password = ?");
  $stmt->bind_param("ss", $farmer_email, $farmer_password);
  $stmt->execute();
  $result = $stmt->get_result();
  $rowcount = $result->num_rows;

  if ($rowcount > 0) {
    $_SESSION['farmer_login_user'] = $farmer_email; // Initializing Session
    
    // Redirecting directly to the farmer profile page
    header("location: fprofile.php");
    exit(); // Ensure the script stops after redirection
  } else {
    $error = "Username or Password is invalid";
  }

  $stmt->close();
  mysqli_close($conn); // Closing Connection
}

?>
