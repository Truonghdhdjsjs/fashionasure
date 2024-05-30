const iconsearch = document.querySelector(' .header_menu_item_zone_search');
const btnsearch = document.querySelector('.header_menu_item_zone_input');
const iconuser = document.querySelector('.header_menu_item_user');
const btnuser  = document.querySelector('.header_menu_item_user_boder')
iconsearch.addEventListener('click',function () {
    btnsearch.classList.toggle('activity')
})
iconuser.addEventListener('click',function () {
    btnuser.classList.toggle('activity')
})