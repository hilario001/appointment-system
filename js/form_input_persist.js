function saveTxtboxValues() {
    const email = document.querySelector('input[type="email"]');
    const password = document.querySelector('input[type="password"]');

    localStorage.setItem('email', email.value);
    localStorage.setItem('password', password.value);
}

document.querySelector("form").addEventListener('submit', function (event) {
    saveTxtboxValues();
});

function loadTxtboxValues() {
    const email = document.querySelector('input[type="email"]');
    const password = document.querySelector('input[type="password"]');
    const emailValue = localStorage.getItem('email');
    const passValue = localStorage.getItem('password');

    if (emailValue && passValue) {
        email.value = emailValue;
        password.value = passValue;
    }
}

loadTxtboxValues();
