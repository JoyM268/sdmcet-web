//Reading Files
const fs = require("fs");
const fileContent = fs.readFileSync("data.json", "utf-8");
console.log(data);

//Writing into the files
const content = `Hello World`;
fs.writeFileSync("output.txt", content);