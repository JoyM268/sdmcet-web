//Example of super keyword
class Parent{
    display(){
        console.log("Parent");
    }
}

class Child extends Parent{
    display(){
        console.log("Child");
    }

    display1(){
        super.display();
    }
}

const c = new Child();
c.display();
c.display1();