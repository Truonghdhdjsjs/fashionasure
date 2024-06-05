function checkform() {
    const user = document.getElementById('txtuser').value.trim();
    const pass = document.getElementById('txtpass').value.trim();
    const errorElement = document.querySelector('.noote_erorr');
    if (user === "" && pass === "") {
        errorElement.innerHTML = 'Chưa nhập tên đăng nhập và mật khẩu';
        errorElement.classList.toggle('show');
       return false
    } else if (user === "") {
        errorElement.innerHTML = 'Chưa nhập tên đăng nhập';
        errorElement.classList.toggle('show');
       return false
    } else if (pass === "") {
        errorElement.innerHTML = 'Chưa nhập mật khẩu';
        errorElement.classList.toggle('show');
       return false
    }
    return true;
}