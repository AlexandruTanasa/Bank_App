<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "bank_database";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    /*
    echo "Connected successfully <br />";

    $sql = "SHOW DATABASES";
    $res = $conn->query($sql);
    
    while($row = $res->fetch_assoc()){
        echo $row['Database'] . "<br />";
    }

    */

?>