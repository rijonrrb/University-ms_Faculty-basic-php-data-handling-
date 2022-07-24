<?php	
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
session_unset();
session_destroy();
header("location:../Controller/login.php");
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<input type="submit" value="Logout" id="submit">
</form>
<br>      
<fieldset>
<legend><h3>About</h3></legend>
<P>AMERICAN INTERNATIONAL UNIVERSITY-BANGLADESH (AIUB) is committed to provide quapty and excellent computer-based academic programs responsive to the emerging challenges of the time. It is dedicated to nurture and produce competent world class professional imbued with strong sense of ethical values ready to face the competitive world of arts, business, science, social science and technology.Since its inception in 1994, AIUB has been at the forefront in Computing by producing technically skilled and competent IT Professionals to meet the needs of the local and international market. Offerd course sectors are CSE, EEE, IPE, BBA etc etc.</p><br>

<p>Phone - 01010101011</p>
<p>Address - Dhaka,Bangladesh</p>
<p>Email - aiub@aiub.edu</p><br>

<p>Copyright &copy; 2022 All Rights Reserved by Mukta.</p>
</fieldset>