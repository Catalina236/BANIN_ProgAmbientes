document.getElementById('togglePassword').addEventListener('click', function () {
    const passwordField = document.getElementById('password');

    const cursorPosition = passwordField.selectionStart;

    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordField.setAttribute('type', type);

    passwordField.setSelectionRange(cursorPosition, cursorPosition);
    
    passwordField.focus();

    this.classList.toggle('fa-eye-slash');
});
