function eyesact() {
    const pass = document.getElementById('txtpassword');
    if(pass.type==='password')
        {
            pass.type='text';
        }
    else
        {
            pass.type='password'
        }
}
function eyses() {
    const checkpass = document.getElementById('resetpassword');
    if(checkpass.type==='password')
        {
            checkpass.type='text';
        }
    else
        {
            checkpass.type='password'
        }
}