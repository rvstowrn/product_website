<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAND Fast | Employees Table</title>
    <style>
        table,tr,th{
            padding:2px;
            border:2px solid;
        }
    </style>
</head>
<body>

    <h1>Employee Tables</h1>

    <table>
        <tr>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>USERNAME</th>
        </tr>
        
        <?php
            include './server_scripts/db.php';

            $sql = "SELECT * from employee"; 
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0) {
                while($employee_row = $result->fetch_assoc()) {
                    echo "<tr>
                        <th>".$employee_row["name"]."</th>
                        <th>".$employee_row["email"]."</th>
                        <th>".$employee_row["username"]."</th>
                    </tr>";
                }    
            }
            else{
                echo 'No Data';
            }
            $conn->close();
        ?>
    </table>    
</body>
</html>

