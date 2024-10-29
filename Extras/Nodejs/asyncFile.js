//Async file handling
const fs = require("fs");
fs.readFile("input.txt", "utf-8", (err, data) => {
    console.log(data);
});

fs.writeFile("output.txt", "Hello World", (err) => {
    if(err) console.log(err)
});