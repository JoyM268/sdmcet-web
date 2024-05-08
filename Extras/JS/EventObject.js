document.getElementById("input").addEventListener("keydown", (event) => {
    document.getElementById("output").innerText = "The key pressed is: " + event.key;
});