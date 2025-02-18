const inputBox = document.getElementById("input-box");
const inputBtn = document.getElementById("input-btn");
const container = document.querySelector(".mega-container");

function addItem() {
    // Creating elements
    const itemDiv = document.createElement("div");
    const itemLeftDiv = document.createElement("div");
    const itemRightDiv = document.createElement("div");
    const checkBox = document.createElement("input");
    const taskText = document.createElement("p");
    const deleteBtn = document.createElement("button");
    const editBtn = document.createElement("button");
    
    // Assigning properties
    checkBox.type = "checkbox";

    itemDiv.classList.add("task-item");
    itemLeftDiv.classList.add("task-item-left");
    itemRightDiv.classList.add("task-item-right");

    deleteBtn.textContent = "Delete";
    editBtn.textContent = "Edit";

    taskText.textContent = inputBox.value;
    
    itemDiv.appendChild(itemLeftDiv);
    itemDiv.appendChild(itemRightDiv);
    itemLeftDiv.appendChild(checkBox);
    itemLeftDiv.appendChild(taskText);
    itemRightDiv.appendChild(deleteBtn);
    itemRightDiv.appendChild(editBtn);

    container.appendChild(itemDiv);

    function removeItem() {
        container.removeChild(itemDiv);
    }
    
    deleteBtn.addEventListener("click", removeItem);
}



inputBtn.addEventListener("click", addItem);
