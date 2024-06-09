function showName(str){
    if (str.length == 0){ 
        //exit function if nothing has been typed in the textbox
        document.getElementById("txtName").innerHTML=""; //clear previous results
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById("txtName").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","SearchPage.php?name="+str,true);
    xmlhttp.send();
}