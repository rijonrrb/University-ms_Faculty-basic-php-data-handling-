<?php
    function connect()
    {
    $conn = new mysqli("localhost","mukta","7878","faculty");
    if($conn->connect_errno)
    {
        die("Connection failed due to ".$conn->connect_error);
    }
    return $conn;
    }

?>