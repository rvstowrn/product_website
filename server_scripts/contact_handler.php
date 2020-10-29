<?php
  include 'db.php';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "INSERT INTO contact VALUES ('".$name."', '".$email."', '".$message."')"; 
  if ($conn->query($sql) === TRUE) {
    header('location: ../');
  } 
  else {
    echo "Error : ". $conn->error;
  }
?>