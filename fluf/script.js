const inputBox = document.getElementById("input-box");
const inputBtn = document.getElementById("input-btn");
const container = document.querySelector(".mega-container");

function addItem() {
    const item = document.createElement("div");
    const para = document.createElement("p");
    const checkBox = document.createElement("input");
    checkBox.type = "checkbox";
    item.appendChild(checkBox);
    item.appendChild(para);
    item.classList.add("task-item");
    para.textContent = inputBox.value;
    container.appendChild(item);

}

inputBtn.addEventListener("click", addItem);