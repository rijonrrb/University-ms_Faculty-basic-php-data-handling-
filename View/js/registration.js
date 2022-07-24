    function isValid(){
    var flag = true;
    var fname=document.forms["registration"]["fname"].value;
    var lname=document.forms["registration"]["lname"].value;
    var fullname=document.forms["registration"]["fullname"].value;
    var gender=document.forms["registration"]["gender"].value;
    var dob=document.forms["registration"]["dob"].value;
    var religion=document.forms["registration"]["religion"].value;
    var Address=document.forms["registration"]["Address"].value;
    var phone=document.forms["registration"]["phone"].value;
    var username=document.forms["registration"]["username"].value;
    var password=document.forms["registration"]["password"].value;

    
 if(fname ==="")
    {
        flag = false;
        document.getElementById('fnameErr').innerHTML=" This field is empty.";
    }
    if(lname ==="")
    {
        flag = false;
        document.getElementById('lnameErr').innerHTML=" This field is empty.";
        
    }
    if(fullname ==="")
    {
        flag = false;
        document.getElementById('fullnameErr').innerHTML=" This field is empty.";
        
    }
    if(gender ==="")
    {
        flag = false;
        document.getElementById('genderErr').innerHTML=" This field is empty.";
        
    }
    if(dob ==="")
    {
        flag = false;
        document.getElementById('dobErr').innerHTML=" This field is empty.";
        
    }
    if(religion ==="")
    {
        flag = false;
        document.getElementById('religionErr').innerHTML=" This field is empty.";
        
    }
    if(Address ==="")
    {
        flag = false;
        document.getElementById('AddressErr').innerHTML=" This field is empty.";
        
    }
    if(phone ==="")
    {
        flag = false;
        document.getElementById('phoneErr').innerHTML=" This field is empty.";        
    }
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