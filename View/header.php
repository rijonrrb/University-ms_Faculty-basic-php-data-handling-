<?php 
session_start();

$username = "";

if(isset($_SESSION['username'])) 
{
$username = $_SESSION['username'];
}
?>
<h1>Hello Dear  <?php echo $username; ?></h1>


