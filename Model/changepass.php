<?php
    include 'Connection.php';
    function Pass($passwordold, $username)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE FACULTY SET password = ? WHERE  username = ?");
    $stmt->bind_param("ss",$passwordold,$username);
     return $stmt->execute();
    }

?>