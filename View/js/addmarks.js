    function isValid(val){
    var flag = true;
    
    var id=  val.id.value
    var fullname=  val.fullname.value
    var section=  val.section.value
    var course=  val.course.value
    var grade=  val.grade.value
    var marks=  val.marks.value
    

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
    if(course ==="")
    {
        flag = false;
        document.getElementById('courseErr').innerHTML=" This field is emptyy.";
        
    }
    if(grade ==="")
    {
        flag = false;
        document.getElementById('gradeErr').innerHTML=" This field is empty.";
        
    }
    if(marks ==="")
    {
        flag = false;
        document.getElementById('marksErr').innerHTML=" This field is empty.";
        
    }
    return flag;
    }
    function add(pform) {
        var valid=isValid(pform);
        if(valid){
        var data = new FormData();
        data.append("id",pform.id.value);
        data.append("fullname",pform.fullname.value);
        data.append("section",pform.section.value);
        data.append("course",pform.course.value);
        data.append("grade",pform.grade.value);
        data.append("marks",pform.marks.value);
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function()
        {
        if (this.status===200) {
            document.getElementById("mrks").innerHTML = this.responseText;
        }
        }
        xhttp.open("POST","../Controller/addmarksAjax.php");
        xhttp.send(data);

    }
    
}