//Promise Example 2
function getData(dataId){
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log(dataId);
            resolve("completed");
        }, 2000);
    })
}

getData(1).then(() => getData(2)).then(() => getData(3));