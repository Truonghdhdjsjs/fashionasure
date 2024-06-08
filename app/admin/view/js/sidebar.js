const listitem = document.querySelectorAll('.slider_list li')
listitem.forEach(item =>{
    item.addEventListener('click',function(){
        let isActive = item.classList.contains("active")
        listitem.forEach(element => {
            element.classList.remove("active")
        });
        if (isActive) {
            item.classList.remove('active')
        }
        else{ item.classList.add("active")}
    })
})