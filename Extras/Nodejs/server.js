//Creating a web server
const http = require("http");
const server = http.createServer((req, res) => {
    res.end("Server");
});

server.listen(8000, "127.0.0.1", () => {
    console.log("Listening");
});