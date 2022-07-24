<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<script src="../View/js/login.js"></script>
<link rel="stylesheet" href="../View/css/login.css"></link>
</head>
<body>
<?php 
$usernameErr = $passwordErr = "";
$login = "";
$flag = false;
include '../Model/login.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 


if (empty($_POST["username"])) 
    {  
       $usernameErr = " Username is required";
       $flag = True;  
    } 

if (empty($_POST["password"])) 
    {  
       $passwordErr = " Password is required";
       $flag = True;  
    } 
 
if(!$flag) 
    {

    $username = input_data($_POST["username"]);
    $password = input_data($_POST["password"]); 

    $login = login($username,$password);
    if($login)
    {
    setcookie("username", $username, time() + 60*60*2);    
    session_start();
    $_SESSION['username'] = $username;
    header("Location: ../View/faculty.php");
    }
    else 
    {
	$login =  "Wrong password";
    }
    }
}
function input_data($data) 
{  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}
?>
<h1>Login</h1><br>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="login" onsubmit="return isValid();" novalidate enctype="application/x-www-form-urlencoded">
<fieldset>   
<label for="username">User Name:</label>
<input type="text" name="username" id="username" >
<span id="usernameErr"></span>
<?php echo $usernameErr; ?> <br><br>
<label for="password">Password:</label>
<input type="password" name="password" id="password" ><br><br>
<span id="passwordErr"></span>
<?php echo $passwordErr; ?>
<?php echo $login; ?>  <br><br>
</fieldset>
<br><input type="submit" name="submit" value="Login" id="submit">
</form>
<br>
<a href="../Controller/registration.php" class="button">Create New Account</a>
</body>
</html>