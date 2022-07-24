    function isValid(){
    var flag = true;
    var noid=document.forms["notice"]["noid"].value;
    var title=document.forms["notice"]["title"].value;
    var notice=document.forms["notice"]["notice"].value;
    var date=document.forms["notice"]["date"].value;
    var section=document.forms["notice"]["section"].value;
    var course=document.forms["notice"]["course"].value;
    
    if(noid ==="")
    {
        flag = false;
        document.getElementById('noidErr').innerHTML=" This field is empty.";
    }
    if(title ==="")
    {
        flag = false;
        document.getElementById('titleErr').innerHTML=" This field is empty.";
        
    }
    if(notice ==="")
    {
        flag = false;
        document.getElementById('noticeErr').innerHTML=" This field is empty.";
        
    }
    if(date ==="")
    {
        flag = false;
        document.getElementById('dateErr').innerHTML=" This field is empty.";
        
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