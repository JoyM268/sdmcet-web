//Example of classes
class Employee{
    constructor(name, salary){
        this.name = name;
        this.salary = salary;
    }

    printDetails(){
        console.log("Name: " + this.name);
        console.log("Salary: " + this.salary);
    }
}

const e1 = new Employee("Joy", 9999);
console.log(e1);