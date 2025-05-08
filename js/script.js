document.addEventListener("DOMContentLoaded", () => {
    const savedFile = localStorage.getItem("activePage");
    const buttons = document.querySelectorAll("nav button");
    let buttonToLoad = null;

    if (savedFile) {
        buttonToLoad = [...buttons].find(btn => btn.dataset.file === savedFile);
    }

    // If no match found, fall back to the first button
    if (!savedFile) {
        buttonToLoad = buttons[0];
    }

    loadContent(buttonToLoad, buttonToLoad.dataset.file);
});

function loadContent(button, file) {
    localStorage.setItem("activePage", file);

     // Remove "active" class from all buttons
    document.querySelectorAll("nav button").forEach(btn => {
      btn.classList.remove("active");
    });

    // Add "active" class to the clicked button
    button.classList.add("active");

    fetch(file)
        .then(res => res.text())
        .then(html => {
            document.querySelector("main").innerHTML = html;
        });
}

function showModal(sel) {
    document.querySelector(sel).classList.add("modal-show");
    document.querySelector("body").classList.add("disable-scroll");
}

function hideModal(sel) {
    document.querySelector(sel).classList.remove("modal-show");
    document.querySelector("body").classList.remove("disable-scroll");
}
