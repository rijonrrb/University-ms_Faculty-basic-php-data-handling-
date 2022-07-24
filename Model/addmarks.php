<?php
    include 'Connection.php';

    function addmarks($id, $fullname, $section, $course, $grade, $marks)
    {
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO MARKS (id, fullname, section, course, grade, marks) VALUES(?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("sssssi",$id, $fullname, $section, $course, $grade, $marks);
     return $stmt->execute();

    }

?>