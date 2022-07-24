    function isValid(){
    var flag = true;
    var id=document.forms["attend"]["id"].value;
    var fullname=document.forms["attend"]["fullname"].value;
    var section=document.forms["attend"]["section"].value;
    var date=document.forms["attend"]["date"].value;
    var attend=document.forms["attend"]["attend"].value;

    if(id ==="")
    {
        flag = false;
        document.getElementById('idErr').innerHTML=" This field is empty.";
    }
    if(fullname ==="")
    {
        flag = false;
        document.getElementById('fullnameErr').innerHTML=" This field is empty.";
        
    }
    if(section ==="")
    {
        flag = false;
        document.getElementById('sectionErr').innerHTML=" This field is empty.";
        
    }
    if(date ==="")
    {
        flag = false;
        document.getElementById('dateErr').innerHTML=" This field is empty.";
        
    }
    if(attend ==="")
    {
        flag = false;
        document.getElementById('attendErr').innerHTML=" This field is empty.";
        
    }
    return flag;
    }