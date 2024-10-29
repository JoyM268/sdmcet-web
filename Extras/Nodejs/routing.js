//Routing in Node
const http = require("http");
const url = require("url");
const server = http.createServer((req, res) => {
    console.log(req.url);
    const pathName = req.url;
    if(pathName === "/home"){
        res.end("Home Page");
    }else if(pathName === "/about"){
        res.end("About Page");
    }else{
        res.writeHead(404, {
            'Content-type': 'text/html'
        });
        res.end("<h1>Page not found</h1>");
    }
});

server.listen(8000, "127.0.0.1", () => {
    console.log("Listening");
});