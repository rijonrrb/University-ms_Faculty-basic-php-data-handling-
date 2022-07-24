<?php
    include 'Connection.php';

    function registration($fname, $lname, $fullname, $gender, $dob,$religion, $Address, $phone, $username, $password)
    {
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO FACULTY (fname,lname,fullname,gender,dob,religion,Address,phone,username,password) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("ssssssssss",$fname, $lname, $fullname, $gender, $dob,$religion, $Address, $phone, $username, $password);
     return $stmt->execute();

    }
?>