<?php
    include 'Connection.php';

    function attendance($id, $name, $section, $date, $attend)
    {
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO ATTENDANCE (id, fullname, section, date, attend) VALUES(?, ?, ?, ?, ?)");
     $stmt->bind_param("sssss",$id, $name, $section, $date, $attend);
     return $stmt->execute();

    }

?>