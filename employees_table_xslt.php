<?php
    include './server_scripts/db.php';
    $xml = new SimpleXMLElement('<all_employees/>');
    $sql = "SELECT * from employee"; 
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        while($employee_row = $result->fetch_assoc()) {
            $employee_xml = $xml->addChild('employee');
            $employee_xml->addChild('name', $employee_row["name"]);
            $employee_xml->addChild('email', $employee_row["email"]);
            $employee_xml->addChild('username', $employee_row["username"]);
        }    
    }
    else{
        echo 'No Data';
    }
    $conn->close();
    $xsl = new DOMDocument;
    $xsl->load('style.xsl');
    $proc = new XSLTProcessor;
    $proc->importStyleSheet($xsl);
    echo $proc->transformToXML($xml);
?>