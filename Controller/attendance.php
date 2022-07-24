<!DOCTYPE html>
<html>
<head>
<title>Attendece</title>
<script src="../View/js/attendance.js"></script>
<link rel="stylesheet" href="../View/css/attendance.css"></link>
</head>
<body>

<?php 
session_start();
if(!isset($_SESSION['username'])){
header("location: ../Controller/login.php");
}
?>

    
<?php
include '../Model/attendance.php';
$idErr= $fullnameErr= $sectionErr = $dateErr = $attendErr = "";  
$id= $fullname= $section =$date = $attend = "";  
$flag = false;
$successfulMessage = $errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    
    if (empty($_POST["id"])) 
    {  
        $idErr = " This field is blank.";
        $flag = True;  
    }
    if (empty($_POST["fullname"])) 
    {  
        $fullnameErr = " This field is blank.";
        $flag = True;  
    }

    if (empty($_POST["section"])) 
    {  
        $sectionErr = " This field is blank.";
        $flag = True;  
    } 
    if (empty($_POST["date"])) 
    {  
        $dateErr = " This field is blank.";
        $flag = True;  
    } 
      

    if (empty($_POST["attend"])) 
    {  
        $attendErr = " This field is blank.";
        $flag = True;  
    }  



    
   if(!$flag) 
   {
     $id = input_data($_POST["id"]);
     $fullname = input_data($_POST["fullname"]);
     $section = input_data($_POST["section"]);
     $date = input_data($_POST["date"]);
     $attend = input_data($_POST["attend"]);
       
        $attendance = attendance($id, $fullname, $section, $date, $attend);
        if($attendance) {
        $successfulMessage = "Successfully attendance Added";
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

<h1>Registration form</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="attend" onsubmit="return isValid();" novalidate enctype="application/x-www-form-urlencoded">
  <fieldset>
    <legend><h3>Attendence Information</h3></legend>
    <label for="id">Enter id:</label>
    <input type="text" id="id" name="id" placeholder="Please fill this blank">
    <span id="idErr"></span>
    <?php echo $idErr; ?>  <br><br>
    <label for="fullname">Enter fullname:</label>
    <input type="text" id="fullname" name="fullname" placeholder="Please fill this blank">
    <span id="fullnameErr"></span>
    <?php echo $fullnameErr; ?>  <br><br>
    <label for="section">Enter section:</label>
    <input type="text" id="section" name="section" placeholder="Please fill this blank">
    <span id="sectionErr"></span>
    <?php echo $sectionErr; ?>  <br><br>
    <label for="date">Select date:</label>
    <input type="date" id="date" name="date">
    <span id="dateErr"></span>
    <?php echo "&nbsp;&nbsp;".$dateErr; ?><br><br>
    <label for="attend">Select Attend status:</label>
    <input type="radio" name="attend"value="YES">
    <label for="YES">YES</label>
    <input type="radio" name="attend" value="NO">
    <label for="NO">NO</label>
    <br>
    <span id="attendErr"></span>
    <?php echo $attendErr; ?><br><br>
  </fieldset>
  <br><br><input type="submit" value="Submit" id="submit">
</form>
 <br>
 <a href="../View/faculty.php" class="button">Go Back</a><br>
 <?php echo "<b>".$successfulMessage."</b>"; ?>
 <?php echo "<b>".$errorMessage."</b>"; ?>

</body>
</html>