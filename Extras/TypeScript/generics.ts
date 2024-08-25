//Example of generics

function addToArray<T>(array: T[], value: T){
    const newArr = [...array, value];
    return newArr;
}

const newArray = addToArray([1, 2, 3], 4);