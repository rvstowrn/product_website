<?php
    include 'db.php';

    $username = $_POST['username'];
    $password = $_POST['pass'];

    $sql = "SELECT * from employee where username='".$username."' and password='".$password."'"; 
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        $user_row = mysqli_fetch_assoc($result);
        header("location: ../employee_home.php");
    }
    else{
            header("location: ../login.php");
    }
    $conn->close();
?>
