<?php
 $servername = "localhost";
 $username = "root";
 $password = "root";
 $databasename = "etroncybersolutions";
 $conn = new mysqli($servername, $username, $password, $databasename);
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
 if($_POST["contact_button"]){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $res = time();
    echo($res);
    $time = (date("Y-m-d",$res));
    $sql = "insert into contact_ecs(Fullname,email,subjects,message,Time)values('$name','$email','$subject','$message','$time')"; 
    if ($conn->query($sql) === TRUE) {
        header("Location: ../");
    } else {
        echo "Error: ".$sql."<br>".$conn->error;
        header("Location: ../");
    }
    $conn->close();
    }
?>