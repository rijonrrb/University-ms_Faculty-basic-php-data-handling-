<!DOCTYPE html>
<html>
<head>
<title>Consulting Hour</title>
<script src="../View/js/setConsulting.js"></script>
<link rel="stylesheet" href="../View/css/setConsulting.css"></link>
</head>
<body>

<?php 
session_start();
if(!isset($_SESSION['username'])){
header("location: ../Controller/login.php");
}
?>

<?php
include '../Model/setConsulting.php';
$dateErr = $startTErr = $endTErr = $sectionErr = $courseErr = "";  
$date = $startT = $endT = $section = $course = "";  
$flag = false;
$successfulMessage = $errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    
    if (empty($_POST["date"])) 
    {  
        $dateErr = " This field is blank.";
        $flag = True;  
    }
    if (empty($_POST["startT"])) 
    {  
        $startTErr = " This field is blank.";
        $flag = True;  
    }
    if (empty($_POST["endT"])) 
    {  
        $endTErr = "This field is blank.";
        $flag = True;  
    } 

    if (empty($_POST["section"])) 
    {  
        $sectionErr = " This field is blank.";
        $flag = True;  
    } 

    if (empty($_POST["course"])) 
    {  
        $courseErr = " This field is blank.";
        $flag = True;  
    } 

    
   if(!$flag) 
   {
     $date = input_data($_POST["date"]);
     $startT = input_data($_POST["startT"]);
     $endT = input_data($_POST["endT"]);
     $section = input_data($_POST["section"]);
     $course = input_data($_POST["course"]);


        $consulting = consulting($date, $startT, $endT, $section, $course);
        if($consulting) {
        $successfulMessage = "Consulting hour Updated";
        }
        else {
        $errorMessage = "There must be an error";
        }
    }  
}
    function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
    }
?> 
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="consulting" onsubmit="return isValid();" novalidate enctype="application/x-www-form-urlencoded">
  <fieldset>
    <legend><h3>Providing Consulting Hours</h3></legend>
    <label for="date">Enter Date:</label>
    <input type="date" id="date" name="date" placeholder="Please fill this blank">
    <span id="dateErr"></span>
    <?php echo $dateErr; ?>  <br><br>
    <label for="startT">Enter Start Time:</label>
    <input type="text" id="startT" name="startT" placeholder="Please fill this blank">
    <span id="startTErr"></span>
    <?php echo $startTErr; ?>  <br><br>
    <label for="endT">Enter End Time:</label>
    <input type="text" id="endT" name="endT" placeholder="Please fill this blank">
    <span id="endTErr"></span>
    <?php echo $endTErr; ?><br><br>
    <label for="section">Enter section for consulting:</label>
    <input type="text" id="section" name="section" placeholder="Please fill this blank">
    <span id="sectionErr"></span>
    <?php echo $sectionErr; ?><br><br>   
    <label for="course">Enter course for consulting:</label>
    <input type="text" id="course" name="course" placeholder="Please fill this blank">
    <span id="courseErr"></span>
    <?php echo $courseErr; ?><br><br>
  </fieldset><br> 
  <input type="submit" value="Submit" id="submit"><br><br> 
  <a href="../View/faculty.php" class="button">Go Back</a><br>
</form>
 <br>
 <?php echo "<b>".$successfulMessage."</b>"; ?>
 <?php echo "<b>".$errorMessage."</b>"; ?>
</body>
</html>