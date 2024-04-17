//Function to add two numbers
function addTwoNumbers(){
    var num1 = document.getElementById("txtnum1").value;
    var num2 = document.getElementById("txtnum2").value;
    if(num1 != "" && num2 != ""){
        var result = parseInt(num1) + parseInt(num2);
        document.getElementById("displayresult").innerText = result;
    }else{
        alert("Invalid input");
    }
}