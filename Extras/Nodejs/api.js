//Creating a simple api
const fs = require("fs");
const http = require("http");

const server = http.createServer((req, res) => {
    const pathName = req.url;
    console.log(pathName);
    if(pathName === "/api"){
        fs.readFile("data.json", "utf-8", (err, data) => {
            res.writeHead(200, {
                'Content-type': 'application/json'
            });
            res.end(data)
        });
    }
});

server.listen(8000, "127.0.0.1");