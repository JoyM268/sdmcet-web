//Example of inheritance
class Parent{
    displayParent(){
        console.log("Parent");
    }
}

class Child extends Parent{
    displayChild(){
        console.log("Child");
    }
}

const c = new Child();
c.displayChild();
c.displayParent();