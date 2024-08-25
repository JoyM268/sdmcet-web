//Example of classes

class Student{
    // firstName: string;
    // lastName: string;
    // private age: number;
    // private courses: string[];

    // constructor(firstName: string, lastName: string, age: number, courses: string[]){
    //     this.firstName = firstName;
    //     this.lastName = lastName;
    //     this.age = age;
    //     this.courses = courses;
    // }

    constructor(
        public firstName: string,
        public lastName: string,
        private age: number,
        private courses: string[]
    ){}
}