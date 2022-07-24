<!DOCTYPE html>
<html>
<head>
<title>Providing Notice</title>
<script src="../View/js/classNotice.js"></script>
<link rel="stylesheet" href="../View/css/classNotice.css"></link>
</head>
<body>

<?php 
session_start();
if(!isset($_SESSION['username'])){
header("location: ../Controller/login.php");
}
?>

    
<?php
include '../Model/ClassNotice.php';
$noidErr = $titleErr = $noticeErr = $dateErr = $sectionErr = $courseErr = "";  
$noid = $title = $notice = $date = $section = $course = "";  
$flag = false;
$successfulMessage = $errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    
    if (empty($_POST["noid"])) 
    {  
        $noidErr = " This field is blank.";
        $flag = True;  
    }
    if (empty($_POST["title"])) 
    {  
        $titleErr = " This field is blank.";
        $flag = True;  
    }
    if (empty($_POST["notice"])) 
    {  
        $noticeErr =" This field is blank.";
        $flag = True;  
    } 
    if (empty($_POST["date"])) 
    {  
        $dateErr = " This field is blank.";
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
     $noid = input_data($_POST["noid"]);
     $title = input_data($_POST["title"]);
     $notice = input_data($_POST["notice"]);
     $date = input_data($_POST["date"]);
     $section = input_data($_POST["section"]);
     $course = input_data($_POST["course"]);

        $notice = notice($noid, $title, $notice, $date, $section, $course);
        if($notice) {
        $successfulMessage = "Successfully Added";
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
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="notice" onsubmit="return isValid();" novalidate enctype="application/x-www-form-urlencoded">
  <fieldset>
    <legend><h3>Providing Notice</h3></legend>
    <label for="noid">Enter notice number:</label>
    <input type="text" id="noid" name="noid" placeholder="Please fill this blank">
    <span id="noidErr"></span>
    <?php echo $noidErr; ?>  <br><br>
    <label for="title">Enter notice title:</label>
    <input type="text" id="title" name="title" placeholder="Please fill this blank">
    <span id="titleErr"></span>
    <?php echo $titleErr; ?>  <br><br>
    <label for="notice">Enter notice content:</label>
    <textarea name="notice" rows="5" cols="60" placeholder="Please fill this blank"></textarea>
    <span id="noticeErr"></span>
    <?php echo $noticeErr; ?><br><br>
    <label for="date">Enter notice publishing date:</label>
    <input type="date" id="date" name="date">
    <span id="dateErr"></span>
    <?php echo $dateErr; ?><br><br>
    <label for="section">Enter section where notice will be visible:</label>
    <input type="text" id="section" name="section" placeholder="Please fill this blank">
    <span id="sectionErr"></span>
    <?php echo $sectionErr; ?><br><br>   
    <label for="course">Enter course name where notice will be visible:</label>
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