function isValid(){
    var flag = true;
    var fname=document.forms["profile"]["fname"].value;
    var lname=document.forms["profile"]["lname"].value;
    var fullname=document.forms["profile"]["fullname"].value;
    var gender=document.forms["profile"]["gender"].value;
    var dob=document.forms["profile"]["dob"].value;
    var religion=document.forms["profile"]["religion"].value;
    var Address=document.forms["profile"]["Address"].value;
    var phone=document.forms["profile"]["phone"].value;



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
    return flag;
    }