<?php
    include 'Connection.php';
    function updatemarks($fullname, $section, $course, $grade, $marks, $id)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE MARKS SET fullname = ?, section= ?, course= ?, grade= ?, marks= ? WHERE id = ?");
    $stmt->bind_param("ssssis", $fullname, $section, $course, $grade, $marks, $id);
     return $stmt->execute();
    }

?>