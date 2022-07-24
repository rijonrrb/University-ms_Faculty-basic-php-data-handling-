<!DOCTYPE html>
<html>
<head>
<title>Faculty Registration</title>
<script src="../View/js/Registration.js"></script>
<link rel="stylesheet" href="../View/css/registration.css"></link>
</head>
<body>
<?php
include '../Model/registration.php';
$fnameErr = $lnameErr =$fullnameErr = $genderErr = $dobErr = $religionErr = $addressErr  =$phoneErr =  $usernameErr = $passwordErr = "";  
$fname = $lname =$fullname = $gender = $dob = $religion = $Address  =$phone =  $username = $password = "";  
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
        $genderErr = "This field is blank.";
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

    if (empty($_POST["username"])) 
    {  
       $usernameErr = " This field is blank.";
       $flag = True;  
    } 

    if (empty($_POST["password"])) 
    {  
       $passwordErr = " This field is blank.";
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
     $username = input_data($_POST["username"]);
     $password = input_data($_POST["password"]);
       
        $registration = registration($fname, $lname, $fullname, $gender, $dob,$religion, $Address, $phone, $username, $password);
        if($registration) {
        header("Location: ../Controller/login.php");
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
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="registration" onsubmit="return isValid();" novalidate enctype="application/x-www-form-urlencoded">
  <fieldset>
    <legend>Personal Information</legend>
    <label for="fname">Enter your First name:</label>
    <input type="text" id="fname" name="fname" placeholder="Please fill this blank">
    <span id="fnameErr"></span>
    <?php echo $fnameErr; ?>  <br><br>
    <label for="lname">Enter your Last name:</label>
    <input type="text" id="lname" name="lname" placeholder="Please fill this blank">
    <span id="lnameErr"></span>
    <?php echo $lnameErr; ?>  <br><br>
    <label for="fullname">Enter your Full name:</label>
    <input type="text" id="fullname" name="fullname" placeholder="Please fill this blank">
    <span id="fullnameErr"></span>
    <?php echo $fullnameErr; ?>  <br><br>
    <label for="gender">Gender :</label>
    <input type="radio" name="gender"<?php if (isset($gender) && $gender=="Male") echo "checked";?>value="Male">
    <label for="Male">Male</label>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">
    <label for="Female">Female</label>
    <input type="radio" name="gender"<?php if (isset($gender) && $gender=="Others") echo "checked";?>value="Others">
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
    <option value="Hinduism">Hinduism</option>
    <option value="Christianity">Christianity</option>
    </select>
    <span id="religionErr"></span>
    <?php echo $religionErr; ?><br><br>   
    </fieldset>
    <fieldset>
    <legend>Contact Information</legend>
    <label for="Address">Enter your Address:</label>
    <textarea name="Address" rows="3" cols="40" placeholder="Please fill this blank"></textarea>
    <span id="AddressErr"></span>
    <?php echo $addressErr; ?><br><br>
    <label for="phone">Enter your phone number:</label>
    <input type="tel" id="phone" name="phone" placeholder="Please fill this blank">
    <span id="phoneErr"></span>
    <?php echo $phoneErr; ?><br><br>
    </fieldset>
    <fieldset>
    <legend>Login Information</legend>
    <label for="username">Enter your Username:</label>
    <input type="text" id="username" name="username"placeholder="Please fill this blank">
    <span id="usernameErr"></span>
    <?php echo $usernameErr; ?><br><br>
    <label for="password">Enter your Password:</label>
    <input type="password" id="password" name="password"placeholder="Please fill this blank">
    <span id="passwordErr"></span>
    <?php echo $passwordErr; ?><br>
  </fieldset>
  <br><br><input type="submit" value="Submit" id="submit">
</form>
 <br>
 <a href="../Controller/login.php" class="button">Go Back</a><br>
 <?php echo "<b>".$errorMessage."</b>"; ?>
</body>
</html>