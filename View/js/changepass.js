function isValid(){
    var flag = true;
    var passwordold=document.forms["password"]["passwordold"].value;
    var newpassword=document.forms["pass"]["newpassword"].value;


    
    if(passwordold ==="")
    {
        flag = false;
        document.getElementById('passwordoldErr').innerHTML=" This field is empty.";
    }
    if(newpassword ==="")
    {
        flag = false;
        document.getElementById('newpasswordErr').innerHTML=" This field is empty.";
        
    }
    return flag;
    }