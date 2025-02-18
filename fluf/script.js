const inputBox = document.getElementById("input-box");
const inputBtn = document.getElementById("input-btn");
const container = document.querySelector(".mega-container");

// Attach event listener to the container for delegation
container.addEventListener("click", (event) => {
    if (event.target.classList.contains("delete-btn")) {
        removeItem(event.target);
    } else if (event.target.classList.contains("edit-btn")) {
        editItem(event.target);
    }
})

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
    deleteBtn.textContent = "Delete";
    editBtn.textContent = "Edit";

    // Add classes to buttons for targeting via delegations
    deleteBtn.classList.add("delete-btn");
    editBtn.classList.add("edit-btn");
    
    taskText.textContent = inputBox.value;
    
    itemDiv.classList.add("task-item");
    itemLeftDiv.classList.add("task-item-left");
    itemRightDiv.classList.add("task-item-right");


    
    itemDiv.appendChild(itemLeftDiv);
    itemDiv.appendChild(itemRightDiv);
    itemLeftDiv.appendChild(checkBox);
    itemLeftDiv.appendChild(taskText);
    itemRightDiv.appendChild(deleteBtn);
    itemRightDiv.appendChild(editBtn);

    container.appendChild(itemDiv);
}

function removeItem(deleteButton) {
    const itemDiv = deleteButton.closest("task-item");
    container.removeChild(itemDiv);
}

inputBtn.addEventListener("click", addItem);
