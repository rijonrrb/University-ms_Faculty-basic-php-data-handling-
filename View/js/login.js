function isValid(){
    var flag = true;
    var username=document.forms["login"]["username"].value;
    var password=document.forms["login"]["password"].value;


    
    if(username ==="")
    {
        flag = false;
        document.getElementById('usernameErr').innerHTML=" This field is empty.";
    }
    if(password ==="")
    {
        flag = false;
        document.getElementById('passwordErr').innerHTML=" This field is empty.";
        
    }
    return flag;
    }