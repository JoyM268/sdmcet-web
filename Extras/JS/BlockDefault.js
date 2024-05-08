document.querySelector("form").addEventListener("submit", (event) => {
    const fName = document.querySelector("#fname");
    const lName = document.querySelector("#lname");
    const paragraph = document.querySelector("p");
    if(fName.value == "" || lName.value == ""){
        event.preventDefault();
        paragraph.innerText = "Enter the first name and Last name.";
    }
});