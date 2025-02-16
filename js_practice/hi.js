let t = document.getElementById("tile");
let but = document.getElementById("titleChange");
const input = document.getElementById("input");

function changeTitle() {
    t.innerHTML = input.value;
    input.value = "";
}

but.addEventListener("click", changeTitle);
input.addEventListener("keydown", (event) => {
    if (event.key == "Enter") {
        changeTitle();
    }
})

console.log(t);