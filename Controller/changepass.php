<!DOCTYPE html>
<html>
<head>
<title>Password</title>
<script src="../View/js/changepass.js"></script>
<link rel="stylesheet" href="../View/css/changepass.css"></link>
</head>
<body>

<?php 
session_start();
if(!isset($_SESSION['username'])){
header("location: ../Controller/login.php");
}
?>

    
<?php
include '../Model/changepass.php';
include '../Model/oldpass.php';
$newpasswordErr = $passwordoldErr = "";  
$newpassword = $passwordold = ""; 
$passE = ""; 
$flag = false;
$successfulMessage = $errorMessage = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    if (empty($_POST["passwordold"])) 
    {  
        $passwordoldErr =" This field is blank.";
        $flag = True;
    } 
  
    if (empty($_POST["newpassword"])) 
    {  
        $newpasswordErr =" This field is blank.";
        $flag = True;
    } 
        

    if(!$flag) 
    {

    $passwordold = input_data($_POST["passwordold"]);
    $newpassword = input_data($_POST["newpassword"]);

    $username = "";
    if(isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
    }
    $users = oldpass($username);
    for($i = 0; $i < count($users); $i++)
    {
    
    if($passwordold === $users[$i]["password"])
    {

    $Pass = Pass($newpassword, $username);  
    if($Pass) {
    $successfulMessage = "Password successfully Updated";
    }
    else {
    $errorMessage = "Error while Updating.";
    }
    }
    else {
    $errorMessage = "Old password mismatch";
    }
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

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="password" onsubmit="return isValid();" novalidate enctype="application/x-www-form-urlencoded">
 <fieldset>
 <legend><h3>Change Password</h3></legend>
 <label for="passwordold">Enter Old Password:</label>
 <input type="password" id="passwordold" name="passwordold">
 <span id="passwordoldErr"></span>
 <?php echo $passwordoldErr; ?><br><br>
 <label for="newpassword">Enter New Password:</label>
 <input type="password" id="newpassword" name="newpassword">
 <span id="newpasswordErr">
 <?php echo $newpasswordErr; ?></span>
 <br><br><input type="submit" value="Submit" id="submit">
 </form>
 <br>
<?php echo "<b>".$successfulMessage."</b>"; ?>
<?php echo "<b>".$errorMessage."</b>"; ?>
</fieldset>
<br><br><a href="../view/faculty.php" class="button">Go Back</a><br>
</body>
</html>