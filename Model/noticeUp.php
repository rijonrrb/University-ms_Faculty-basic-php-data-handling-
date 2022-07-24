<?php
    include 'Connection.php';
    function noticeUp($title, $notice, $date, $section, $course, $noid)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE NOTICE SET title = ?, notice= ?, date= ?, section= ?, course= ? WHERE noid = ?");
    $stmt->bind_param("sssssi", $title, $notice, $date, $section, $course, $noid);
     return $stmt->execute();
    }

?>