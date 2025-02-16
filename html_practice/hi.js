const div = document.querySelector(".one");
const btn = document.querySelector("button");
const input = document.querySelector("input");

function changeColor() {
    div.style.color = input.value;
}

btn.addEventListener("click", changeColor);
input.addEventListener("keydown", (event) => {
    if (event.key === "Enter") {
        changeColor();
        input.value = "";
    }
});
