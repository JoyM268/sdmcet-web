function clicked(event){
    const btn = event.target.innerText; 
    document.getElementById("output").innerText = "The " + btn + " Button was clicked";
}

document.getElementById("fbtn").addEventListener("click", clicked);
document.getElementById("sbtn").addEventListener("click", clicked);