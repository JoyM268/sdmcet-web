//Promise Example 1
let promise = new Promise((resolve, reject) => {
    let a = 1;
    if(a == 1){
        resolve("resolved");
    }else{
        reject("rejected");
    }
});

promise.then((value) => {
    console.log(value);
}).catch((value) => {
    console.log("Error: " + value);
});