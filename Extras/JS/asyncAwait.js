//Async Await Example
function getData(dataId){
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log(dataId);
            resolve(200);
        }, 5000);
    });
}

async function data() {
    await getData(1);
    await getData(2);
    await getData(3);
    await getData(4);
    await getData(5);
    await getData(6);
}

data();