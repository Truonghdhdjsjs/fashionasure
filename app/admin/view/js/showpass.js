const eyes = document.getElementById('eyes');
eyes.addEventListener('click', function () {
    const input = document.getElementById('txtpass');
    if (input.type === 'password') {
        input.type = 'text';
    } else {
        input.type = 'password';
    }
});
