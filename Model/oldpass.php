<?php

    function oldpass($username)
    {
    $conn = connect();
    $stmt = $conn->prepare("SELECT password FROM FACULTY WHERE username = ?");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->fetch_all(MYSQLI_ASSOC);
    }

?>