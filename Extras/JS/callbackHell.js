//Callback hell example
function getData(dataId, getNextData){
    setTimeout(() => {
        console.log(dataId); 
        if(getNextData){
            getNextData();
        }
    }, 2000);
}

getData(1, () => {
    getData(2, () => {
        getData(3, () => {
            getData(4, () => {
                getData(5, () => {
                    getData(6, () => {
                        getData(7);    
                    });   
                });
            });
        });
    });
});