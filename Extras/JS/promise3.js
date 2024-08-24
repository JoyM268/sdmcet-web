//Promise Example 3
function getData1(){
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log(1);
            resolve("completed");
        }, 2000);
    })
}

function getData2(){
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log(2);
            resolve("completed");
        }, 1000);
    })
}

function getData3(){
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log(3);
            resolve("completed");
        }, 3000);
    })
}

function getData4(){
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log(4);
            resolve("completed");
        }, 2000);
    })
}

function getData5(){
    setTimeout(() => {
        console.log(5);
    }, 5000);
}

getData1()
    .then(() => {
        return getData2();
    })
    .then(() => {
        return getData3();
    })
    .then(() => {
        return getData4();
    })
    .then(() => {
        getData5();
    });