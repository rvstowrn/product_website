<?php
    include './db.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO employee VALUES ('".$name."', '".$email."', '".$username."','".$password."')"; 
    
    if ($conn->query($sql) === TRUE) {
        header('location: ../login.php');
    } 
    else {
        echo "Error : ". $conn->error;
    }
    $conn->close();

?>