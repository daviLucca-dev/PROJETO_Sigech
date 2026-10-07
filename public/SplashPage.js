document.addEventListener('DOMContentLoaded', () => {

    const accessButton = document.getElementById('accessButton');

    accessButton.addEventListener('click', () => {
        window.location.href = 'LoginPage';
    });

});