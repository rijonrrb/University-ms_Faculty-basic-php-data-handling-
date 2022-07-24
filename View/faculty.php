<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Homepage</title>
<link rel="stylesheet" href="../View/css/home.css"></link>
</head>
<body>
	
<?php 
include '../View/header.php';
?>

<?php 
if(!isset($_SESSION['username'])){
header("location: ../Controller/login.php");
}
?>

<a href="../Controller/editprofile.php" class="button">Profile Edit</a><br>
<a href="../Controller/changepass.php" class="button">Change password</a><br>
<a href="../Controller/attendance.php" class="button">Attendence</a><br>
<a href="../Controller/addmarks.php" class="button">Grade Uploading</a><br>
<a href="../Controller/updatemarks.php" class="button">Update Grade</a><br>
<a href="../Controller/classNotice.php" class="button">Notice Uploading</a><br>
<a href="../Controller/noticeUp.php" class="button">Update Notice</a><br>
<a href="../Controller/setConsulting.php" class="button">Add Consulting Hour</a><br>
<a href="../Controller/viewCourse.php" class="button">Show Course List</a>

<?php 
include '../View/footer.php';
?>

</body>
</html>
