//Example of prototype
const employee = {
    calcTax(){
        console.log("Tax rate is 10%");
    }
};

const joy = {
    salary: 5000    
}

joy.__proto__ = employee;

joy.calcTax();