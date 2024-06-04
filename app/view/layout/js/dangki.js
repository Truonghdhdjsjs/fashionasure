const resquest = document.getElementById('nhap');
resquest.addEventListener('click', function () {
    // const list = document.querySelector('.border_form_nav');
    // const item = document.querySelectorAll('.border_form_item');
    const itemerorr = document.querySelectorAll('#border_form_item_txt');
    const username = document.getElementById('username').value.trim();
    const numberphone = document.getElementById('numberphone').value.trim();
    const email = document.getElementById('txtemail').value.trim();
    const pass = document.getElementById('txtpassword').value.trim();
    const respas = document.getElementById('resetpassword').value.trim();
    const btn = document.querySelectorAll('input')
    let intererorr = false;

    for (let i = 0; i < itemerorr.length; i++) {
        // if(username === ""|| numberphone===""||email===""||pass===""||respas==="")
        //     {
        //         itemerorr[i].innerText = 'Bạn chưa đủ dữ kiện';
        //         itemerorr[i].style.color = 'red';
        //         intererorr = true;
        //     }
        if (username === "") {
            itemerorr[0].innerText = 'Bạn chưa nhập tên';
            itemerorr[0].style.color = 'red';
            intererorr = true;
            break;
        }
        else if(username.length < 6)
            {
                itemerorr[0].innerText = 'Tên không được chứa ký tự đặc biệt';
                itemerorr[0].style.color = 'red';
                intererorr = true;
                break;
            }
        else
        {
            itemerorr[0].innerText = '';
            itemerorr[0].style.color = 'red';   
        }
        if (numberphone === "") {
            itemerorr[1].innerText = 'Bạn chưa nhập số điện thoại';
            itemerorr[1].style.color = 'red';
            intererorr = true;
        }
        else if (numberphone<10) {
            itemerorr[1].innerText = 'Số điện thoại không hợp lệ';
            itemerorr[1].style.color = 'red';
            intererorr = true;
        }
        else
        {
            itemerorr[1].innerText = '';
            itemerorr[1].style.color = 'red';
        }
        if (email==="") {
            itemerorr[2].innerText = 'Bạn chưa nhập email';
            itemerorr[2].style.color = 'red';
            intererorr = true;
        }
        else if (email.length<8) {
            itemerorr[2].innerText = 'email không hợp lệ';
            itemerorr[2].style.color = 'red';
            intererorr = true;
        }
        else
        {
            itemerorr[2].innerText = '';
            itemerorr[2].style.color = 'red';
        }
        if (pass==="") {
            itemerorr[3].innerText = 'Bạn chưa nhập mật khẩu';
            itemerorr[3].style.color = 'red';
            intererorr = true;
        }
        else if (pass.length<8) {
            itemerorr[3].innerText = 'Số ký tự phải trên 8';
            itemerorr[3].style.color = 'red';
            intererorr = true;
        }
        else
        {
            itemerorr[3].innerText = '';
            itemerorr[3].style.color = 'red';
        }
        if (respas==="") {
            itemerorr[4].innerText = 'Bạn chưa nhập xác nhận dư liệu';
            itemerorr[4].style.color = 'red';
            intererorr = true;
        }
        else if (respas.length<8) {
            itemerorr[4].innerText = 'Số ký tự phải trên 8';
            itemerorr[4].style.color = 'red';
            intererorr = true;
        }
        else if (pass!=respas) {
            itemerorr[4].innerText = 'kiểm tra lại mật khẩu';
            itemerorr[4].style.color = 'red';
            // intererorr[4].style.outline = '1px solid red';
            intererorr = true;
        }
        else
        {
            itemerorr[4].innerText = '';
            itemerorr[4].style.color = 'red';
        }
    }
});

const numberphoneField = document.getElementById('numberphone');
numberphoneField.addEventListener('input', function(event) {
    let currentValue = event.target.value;
    let numericValue = currentValue.replace(/\D/g, '');
    event.target.value = numericValue;
});
const usernameField = document.getElementById('username');
usernameField.addEventListener('input', function(event) {
    let currentValue = event.target.value;
    let alphanumericValue = currentValue.replace(/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/g, '');
    event.target.value = alphanumericValue;
});
// const showpass = document.getElementById("eyes");
// const password = document.getElementById('txtpassword');
// const checkpass = document.getElementById('resetpassword');

// showpass.addEventListener('click', function () {
//     if (password.type === 'password') {
//         password.type = 'text';
//     } else {
//         password.type = 'password';
//     }

//     // if (checkpass.type === 'password') {
//     //     checkpass.type = 'text';
//     // } else {
//     //     checkpass.type = 'password';
//     // }
// });

// const showpasss = document.getElementById("eyes");
// const checkpasss = document.getElementById('resetpassword');

// showpasss.addEventListener('click', function () {
 

//     if (checkpasss.type === 'password') {
//         checkpasss.type = 'text';
//     } else {
//         checkpasss.type = 'password';
//     }
// });