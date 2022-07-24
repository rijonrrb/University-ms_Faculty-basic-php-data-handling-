<?php
    include 'Connection.php';
    function editprofile($fname, $lname, $fullname, $gender, $dob, $religion, $Address, $phone, $username)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE FACULTY SET fname = ?, lname= ?, fullname= ?, gender= ?, dob= ?, religion= ?, Address= ?, phone= ? WHERE username = ?");
    $stmt->bind_param("sssssssss",$fname, $lname, $fullname, $gender, $dob, $religion, $Address, $phone, $username);
     return $stmt->execute();
    }

?>