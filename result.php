<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width:100%;
            height:100%;
            overflow:hidden;
            padding-top:10px;
            padding-left:20px;
        }
        img{
            position:absolute;
            height:100vh;
            left:50%;
            transform:translateX(-50%);
            pointer-events:none;
            z-index:-1;
        }
        a{
            background-color:gray;
            color:white;
            text-decoration:none;
            padding:10px;
            margin-right:15px;
            font-size:20px;
        }
    </style>
</head>
<body>
    <img src='./img/result_bg.jpg'>
    <?php
        include './server_scripts/db.php';
        $score = 0;
        $nos = intval($_POST['nos']);
        for ($i=0; $i < $nos; $i++) { 
            $q = $_POST['q'.$i];
            $a = $_POST['a'.$i];
            $sql =  "Select * from trivia where q='".$q."' and a='".$a."'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0) {
                $score = $score + 1;
            }
        }
        echo "<h1>Your answered ".$score." questions correct out of ".$nos." questions</h1>";
    ?>
    <a href='./'>Home</a>
    <a href='./trivia.php'>Redo Trivia</a>
</body>
</html>
