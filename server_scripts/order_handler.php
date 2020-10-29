<?php
  include 'db.php';
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['number'];
  $address = $_POST['address'];
  $productid = $_POST['productid'];

  $sql = "INSERT INTO contact VALUES ('".$fname."', '".$lname."', '".$email."','".$phone."','".$address."','".$productid."')"; 
  if ($conn->query($sql) === TRUE) {
    header('location: ../');
  } 
  else {
    echo "Error : ". $conn->error;
  }
?>