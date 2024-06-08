function save_catologo_lv1() {
   const save = document.querySelector('.tool_save a');
   const path = document.getElementById('txtpath').value.trim();
   const tilte = document.getElementById('txttitle').value.trim();
   const notification_plus = document.getElementById('erorr_notification_plus');
//    notification_plus.innerHTML='(Vui lòng không nhập trùng tiêu đề)';
    if (tilte===""&&path==="") {
        notification_plus.innerHTML='(Vui lòng không nhập trùng tiêu đề)';
        notification_plus.style.color='red';
        return false
    }
    else if(tilte==="")
        {
            notification_plus.innerHTML='(Bạn chưa nhâp tiêu đề)';
            notification_plus.style.color='red';
            return false
        }
    else if(path==="")
        {
            notification_plus.innerHTML='(Bạn chưa nhâp đường dẫn)';
            notification_plus.style.color='red';
            return false
        }
    return true
}