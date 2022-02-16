const gridContainer = document.querySelector("[data-grid-container]");
const gridItems = document.querySelectorAll(".grid-item");
const boxes = document.querySelectorAll("[data-box]");
const closeBtns = document.querySelectorAll(".closeBtn");

for (let i = 0; i < gridItems.length; i++) {
    gridItems[i].addEventListener("click", () => {
        boxes[i].className += " visible";
        // gridContainer.style.filter = "brightness(20%)";
        boxes.style.filter = "brightness(20%)";
    })
}


closeBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        for (let i = 0; i < boxes.length; i++)
            boxes[i].classList.remove("visible");
            gridContainer.style.filter = "brightness(100%)";
    })
})
