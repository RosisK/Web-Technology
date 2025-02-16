// const input = document.querySelector("input");
// const button = document.querySelector("button");

// // Let's make a function that will take the text in the input box and display it with console log
// function display() {
//     // Now, in the <input> object, there is a property that stores the value in it. Its `value`.
//     const para = document.createElement("p");
//     para.innerText = input.value;   
//     document.body.appendChild(para);
// }

// console.log(window.history);

// // Now, this is a function. But we need to call it when the user presses the button. So, to know if the user has pressed the button, we attach an event listener to the button.
// // that way, we can know when the user presses the button, and then we can call the function

button.addEventListener("click", display);

// // Now, when the event is triggered on the button, click in this case, the function display will be called









class Hello {
    constructor (name, age) {
        this.name = name;
        this.age = age;
    }

    name(name) {
        this.name = name;
    }
    age(age) {
        this.age = age;
    }
}

const one = new Hello("Rosis", 42);
console.log(one.name);
console.log(one.age);

const two = new Hello("Aayam", 59);
console.log(two.name);
console.log(two.age);
