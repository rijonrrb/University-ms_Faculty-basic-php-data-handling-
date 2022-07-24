    function isValid(){
    var flag = true;
    var date=document.forms["consulting"]["date"].value;
    var startT=document.forms["consulting"]["startT"].value;
    var endT=document.forms["consulting"]["endT"].value;
    var section=document.forms["consulting"]["section"].value;
    var course=document.forms["consulting"]["course"].value;


    
    if(date ==="")
    {
        flag = false;
        document.getElementById('dateErr').innerHTML=" This field is empty.";
    }
    if(startT ==="")
    {
        flag = false;
        document.getElementById('startTErr').innerHTML=" This field is empty.";
        
    }
    if(endT ==="")
    {
        flag = false;
        document.getElementById('endTErr').innerHTML=" This field is empty.";
        
    }
    if(section ==="")
    {
        flag = false;
        document.getElementById('sectionErr').innerHTML=" This field is empty.";
        
    }
    if(course ==="")
    {
        flag = false;
        document.getElementById('courseErr').innerHTML=" This field is empty.";
        
    }
    return flag;
    }