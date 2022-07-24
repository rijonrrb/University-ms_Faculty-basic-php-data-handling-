<?php
    include 'Connection.php';

    function consulting($date, $startT, $endT, $section, $course)
    {
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO CONSULTING (date, startT, endT, section, course) VALUES(?, ?, ?, ?, ?)");
     $stmt->bind_param("sssss",$date, $startT, $endT, $section, $course);
     return $stmt->execute();

    }

?>