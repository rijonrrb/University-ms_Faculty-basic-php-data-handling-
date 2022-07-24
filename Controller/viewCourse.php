<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Course Information</title>
<link rel="stylesheet" href="../View/css/viewCourse.css"></link>
</head>
<body>

<?php 
session_start();
if(!isset($_SESSION['username'])){
header("location: ../Controller/login.php");
}
?>

<fieldset>
<legend><h3>Course Information</h3></legend>
<?php
include '../Model/viewCourse.php';
$output = getAllUsers();
    for($i = 0; $i < count($output); $i++)
    {
       echo "<p>" 
       ."Course Id :" ."&nbsp;&nbsp;" .$output[$i]["id"]."<br>" 
       ."Course Name :" ."&nbsp;&nbsp;" .$output[$i]["name"]."<br>" 
       ."Course section :" ."&nbsp;&nbsp;" .$output[$i]["section"]."<br>"
       ."Course days :" ."&nbsp;&nbsp;" .$output[$i]["days"]."<br>" 
       ."Course Time :" ."&nbsp;&nbsp;" .$output[$i]["Time"]."<br>" 
       ."Class Room Number :" ."&nbsp;&nbsp;" .$output[$i]["room"]."<br>
       </P>" ;
}
?>
</fieldset>
<br><br><a href="../View/faculty.php" class="button">Go Back</a><br><br>
</body>
</html>