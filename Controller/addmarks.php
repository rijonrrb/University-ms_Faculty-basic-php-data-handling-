<!DOCTYPE html>
<html>
<head>
<title>Marks Adding</title>
<script src="../View/js/addmarks.js"></script>
<link rel="stylesheet" href="../View/css/addmarks.css"></link>
</head>
<body>

<?php 
session_start();
if(!isset($_SESSION['username'])){
header("location: ../Controller/login.php");
}
?>

  
<form method="POST" name ="marks" onsubmit="add(this); return false; "novalidate enctype="application/x-www-form-urlencoded">
  <fieldset>
    <legend><h3>Student grade uploading</h3></legend>
    <label for="id">Enter Student id:</label>
    <input type="text" id="id" name="id" placeholder="Please fill this blank">
    <span id="idErr"></span>
    <br><br>
    <label for="fullname">Enter Student name:</label>
    <input type="text" id="fullname" name="fullname" placeholder="Please fill this blank">
    <span id="fullnameErr"></span>
    <br><br>
    <label for="section">Enter Student section:</label>
    <input type="text" id="section" name="section" placeholder="Please fill this blank">
    <span id="sectionErr"></span>
    <br><br>
    <label for="course">Enter Student course name:</label>
    <input type="text" id="course" name="course" placeholder="Please fill this blank">
    <span id="courseErr"></span>
    <br><br>
    <label for="grade">Choose Student course grade:</label>
    <select name="grade" id="grade">
    <option></option>
    <option value="A+">A+</option>
    <option value="A">A</option>
    <option value="B+">B+</option>
    <option value="B">B</option>
    <option value="C+">C+</option>
    <option value="C">C</option>
    </select>
    <span id="gradeErr"></span>
    <br><br>   
    <label for="marks">Enter Student course marks:</label>
    <input type="text" id="marks" name="marks" placeholder="Please fill this blank">
    <span id="marksErr"></span>
    <br><br>
  </fieldset><br> 
  <input type="submit" value="Submit"  id="submit"><br><br> 
  <a href="../View/faculty.php" class="button">Go Back</a><br>
</form>
 <br>
<div id="mrks"></div>
</body>
</html>