<?php
// Function to validate email address
function validateEmail($email) {
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return true;
  } else {
    return false;
  }
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validate form inputs
  if (empty($name) || empty($email) || empty($password)) {
    echo "Please fill out all fields.";
    exit;
  }
  
  if (!validateEmail($email)) {
    echo "Invalid email format.";
    exit;
  }

  // Save profile picture to server
  $uploads_dir = 'uploads/';
  $filename = uniqid() . '_' . $_FILES['profile_picture']['name'];
  $tmp_name = $_FILES['profile_picture']['tmp_name'];
  move_uploaded_file($tmp_name, $uploads_dir . $filename);

  // Save user data to CSV file
  $data = array($name, $email, $filename, date('Y-m-d H:i:s'));
  $file = fopen('users.csv', 'a');
  fputcsv($file, $data);
  fclose($file);

  // Start session and set cookie
  session_start();
  $_SESSION['name'] = $name;
  $_SESSION['email'] = $name;
  setcookie('name', $name, time()+3600);
 

  // Redirect to thank you page
  header('Location: confirmation.php');
  exit;
}
?>
