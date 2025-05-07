// Pass the first button as an argument (service button)
loadContent(document.querySelector("button"), "service/service.php");

function loadContent(button, file) {
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
