<?php
  include 'db.php';
  $name = $_POST['name'];
  $description = $_POST['description'];
  $target_dir = "../uploads/";
  $uniquesavename=time().uniqid(rand());
  $target_file = $target_dir . $uniquesavename. '.jpg' ;
  $filename = $_FILES["imglink"]["tmp_name"];
  move_uploaded_file($filename,  $target_file);
  $sql = "INSERT INTO product VALUES ('".$uniquesavename."', '".$name."', '".$uniquesavename."','".$description."')"; 
  if ($conn->query($sql) === TRUE) {
    header('location: ../');
  } 
  else {
    echo "Error : ". $conn->error;
  }
?>