let sum = 0;
let count = 0;

while (true) {
    const marks = parseInt(prompt("Enter marks between 0 and 99.\n Enter 999 to exit."));
    if (marks == 999) {
        break;
    }

    if (marks >= 0 && marks <= 99) {
        sum += marks;        
    }
    count++;
}

const avg = sum / count;
alert(`Average: ${avg}`);