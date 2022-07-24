<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Faculty Edit</title>
<script src="../View/js/editprofile.js"></script>
<link rel="stylesheet" href="../View/css/editprofile.css"></link>
</head>
<body>

<?php 
session_start();
if(!isset($_SESSION['username'])){
header("location: ../Controller/login.php");
}
?>

<?php
include '../Model/editprofile.php';
$fnameErr = $lnameErr =$fullnameErr = $genderErr = $dobErr = $religionErr = $addressErr  =$phoneErr = "";  
$fname = $lname =$fullname = $gender = $dob = $religion = $Address  =$phone = "";  
$flag = false;
$successfulMessage = $errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    
    if (empty($_POST["fname"])) 
    {  
        $fnameErr = " This field is blank.";
        $flag = True;  
    }
    if (empty($_POST["lname"])) 
    {  
        $lnameErr = " This field is blank.";
        $flag = True;  
    }
  
    if (empty($_POST["fullname"])) 
    {  
        $fullnameErr = " This field is blank.";
        $flag = True;  
    } 
    if (empty($_POST["gender"])) 
    {  
        $genderErr = " This field is blank.";
        $flag = True;  
    }     
    if (empty($_POST["dob"])) 
    {  
        $dobErr = " This field is blank.";
        $flag = True;  
    }  

    if (empty($_POST["religion"])) 
    {  
        $religionErr = " This field is blank.";
        $flag = True;  
    } 
    if (empty($_POST["Address"])) 
    {  
        $addressErr = " This field is blank.";
        $flag = True;  
    } 

    if (empty($_POST["phone"])) 
    {  
        $phoneErr = " This field is blank.";
        $flag = True;  
    } 

    if(!$flag) 
    {

    $fname = input_data($_POST["fname"]);
    $lname = input_data($_POST["lname"]);
    $fullname = input_data($_POST["fullname"]);
    $gender = input_data($_POST["gender"]);
    $dob = input_data($_POST["dob"]);
    $religion = input_data($_POST["religion"]);
    $Address = input_data($_POST["Address"]);
    $phone = input_data($_POST["phone"]);
      
    $username = "";
    if(isset($_COOKIE['username'])) 
    {
    $username = $_COOKIE['username'];
    }
        $editprofile = editprofile($fname, $lname, $fullname, $gender, $dob, $religion, $Address, $phone, $username);  
        if($editprofile) {
        $successfulMessage = "Profile successfully Updated";
        }
        else {
        $errorMessage = "Error while Updating.";
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


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="profile" onsubmit="return isValid();" novalidate enctype="application/x-www-form-urlencoded">
  <fieldset>
    <legend><h3>Update Personal Information</h3></legend>
    <label for="fname">Enter your First name:</label>
    <input type="text" id="fname" name="fname" placeholder="Please fill th blank">
    <span id="fnameErr"></span>
    <?php echo $fnameErr; ?>  <br><br>
    <label for="lname">Enter your Last name:</label>
    <input type="text" id="lname" name="lname" placeholder="Please fill th blank">
    <span id="lnameErr"></span>
    <?php echo $lnameErr; ?>  <br><br>
    <label for="fullname">Enter your Full name:</label>
    <input type="text" id="fullname" name="fullname" placeholder="Please fill th blank">
    <span id="fullnameErr"></span>
    <?php echo $fullnameErr; ?>  <br><br>
    <label for="gender">Gender :</label>
    <input type="radio" name="gender"value="Male">
    <label for="Male">Male</label>
    <input type="radio" name="gender"value="Female">
    <label for="Female">Female</label>
    <input type="radio" name="gender"value="Others">
    <label for="Others">Others</label>
    <br>
    <span id="genderErr"></span>
    <?php echo $genderErr; ?><br><br>
    <label for="DOB">Date of birth:</label>
    <input type="date" id="dob" name="dob">
    <span id="dobErr"></span>
    <?php echo "&nbsp;&nbsp;".$dobErr; ?><br><br>
    <label for="religion">Choose your Religion:</label>
    <select name="religion" id="religion">
    <option>Select Religion</option>
    <option value="Islam">Islam</option>
    <option value="Hindum">Hindum</option>
    <option value="Chrtianity">Chrtianity</option>
    </select>
    <span id="religionErr"></span>
    <?php echo $religionErr; ?><br><br>   
    </fieldset>
    <fieldset>
    <legend>Update Contact Information</legend>
    <label for="Address">Enter your Address:</label>
    <textarea name="Address" rows="3" cols="40" placeholder="Please fill th blank"></textarea>
    <span id="AddressErr"></span>
    <?php echo $addressErr; ?><br><br>
    <label for="phone">Enter your phone number:</label>
    <input type="tel" id="phone" name="phone" placeholder="Please fill th blank">
    <span id="phoneErr"></span>
    <?php echo $phoneErr; ?><br><br>
    </fieldset>
  <br><input type="submit" value="Submit" id="submit">&nbsp;&nbsp;&nbsp;
 </form>
 <br>
 <a href="../View/Faculty.php" class="button">Go Back</a><br>
 <?php echo "<b>".$successfulMessage."</b>"; ?>
 <?php echo "<b>".$errorMessage."</b>"; ?>

</body>
</html>