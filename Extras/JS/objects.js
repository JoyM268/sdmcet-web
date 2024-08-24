//Exampple of object
const student = {
    name : "Joy",
    marks: 9.69,

    printMarks: function(){
        console.log("Marks: " + this.marks);
    },

    printName(){
        console.log("Name: " + this.name);
    }
}

student.printName();
student.printMarks();