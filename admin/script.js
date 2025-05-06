loadContent("service.php");

function loadContent(file) {
  fetch(file)
    .then(res => res.text())
    .then(html => {
      document.querySelector('main').innerHTML = html;
    });
}
