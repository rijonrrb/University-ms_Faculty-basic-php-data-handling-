<?php
    include 'Connection.php';
    function notice($noid, $title, $notice, $date, $section, $course)
    {
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO NOTICE (noid, title, notice, date, section, course) VALUES(?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("isssss",$noid, $title, $notice, $date, $section, $course);
     return $stmt->execute();

    }

?>