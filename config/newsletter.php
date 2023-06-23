<?php
 $servername = "localhost";
 $username = "root";
 $password = "root";
 $databasename = "etroncybersolutions";
 $conn = new mysqli($servername,
   $username, $password, $databasename);
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
 if($_POST["email"]){
    $email = $_POST["email"];
    echo $email;
    $res = time();
    echo($res . "<br>");
    $time = (date("Y-m-d",$res));
    $sql = "insert into News_Letter(Emails,Time)values('$email','$time')"; 
    if ($conn->query($sql) === TRUE) {
        header("Location: ../");
    } else {
        echo "Error: ".$sql."<br>".$conn->error;
        header("Location: ../");
    }
    $conn->close();
    }
?>