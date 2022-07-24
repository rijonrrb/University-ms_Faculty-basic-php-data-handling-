<?php
include '../Model/updatemarks.php';
$id = $fullname = $section = $course = $grade = $marks = "";  
$flag = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    
    if (empty($_POST["id"])) 
    {  
        echo " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["fullname"])) 
    {  
        echo " *This field can't be empty";
        $flag = True;  
    }
    if (empty($_POST["section"])) 
    {  
        echo "*This field can't be empty";
        $flag = True;  
    } 
    if (empty($_POST["course"])) 
    {  
        echo " *This field can't be empty";
        $flag = True;  
    }  

    if (empty($_POST["grade"])) 
    {  
        echo " *This field can't be empty";
        $flag = True;  
    } 

    if (empty($_POST["marks"])) 
    {  
        echo " *This  field can't be empty";
        $flag = True;  
    } 

    
   if(!$flag) 
   {
     $id = input_data($_POST["id"]);
     $fullname = input_data($_POST["fullname"]);
     $section = input_data($_POST["section"]);
     $course = input_data($_POST["course"]);
     $grade = input_data($_POST["grade"]);
     $marks = input_data($_POST["marks"]);


        $updatemarks = updatemarks($fullname, $section, $course, $grade, $marks, $id);  
        if($updatemarks) {
        echo "<h3>" ."Marks successfully Updated"."<h3>";
        }
        else {
        echo "Error while Updating.";
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