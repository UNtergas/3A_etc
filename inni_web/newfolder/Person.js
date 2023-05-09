Person = function (name, age) {
    this.name = name
    this.age = age;
    this.speak = function () {
        console.log(`Im ${this.name} and i speak engl`);
    }
}

Person.prototype.describe = function () {
    console.log("description");
}
Person.prototype.method2 = (arg) => {
    console.log(`the given args is ${arg}`);
}


class Student extends Person {
    constructor(name, age, note) {
        super(name, age);
        this.note = note;
    }
    shownote = () => {
        console.log(`my note is ${this.note}`);
    }
}

etudiant = function (name, age, note) {
    Object.setPrototypeOf(etudiant.prototype, Person.prototype);
    // this.__proto__ = Person.prototype;
    Person.call(this, name, age);
    this.note = note;
    this.getnote = () => {
        console.log(`my note is ${this.note}`);
    }
    etudiant.prototype.studentcall = () => {
        console.log('im a student');
    }
}

monro = function () {
    Object.setPrototypeOf(monro.prototype, etudiant.prototype);
    this.shout = () => {
        console.log('im morno');
    }
}
/*
*   test 1:
 */
// p1 = new Person("abc", 123);
// p1.speak();

// p1.describe();
// p2 = new Person("zer", 456);
// p2.method2('newg');

// console.log(p1.speak === p2.speak);
// console.log(p1.describe === p2.describe);


s1 = new etudiant("phuoc", 12, 13);
s1.describe();
// s1.getnote();
s1.method2('adasda');
console.log(s1 instanceof etudiant);
console.log(s1 instanceof Person);
console.log(s1.constructor);
console.log(Object.getPrototypeOf(s1));
s1.speak();

console.log(Object.getPrototypeOf(Object.getPrototypeOf(s1)));
mr = new monro();
mr.shout();
mr.describe();
mr.studentcall();


students = [
    { name: "a", grade: 19 },
    { name: "b", grade: 10 },
    { name: "c", grade: 30 }
]

for (let i of students) {
    var a = a + i.grade;
}
console.log(a / 3);