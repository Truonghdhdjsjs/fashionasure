var upload = document.getElementById('txtfiles')
var preview = document.querySelector('.preview')
var error = document.getElementById('error')
upload.addEventListener('change',function(e){
//    var file = upload.file[0]
    var files = upload.files[0]
    if(!files)
        {return}
    if(!files.name.endsWith('.png'))
        {
            error.innerHTML='hinh can dinh dang .jpg'
            error.style.color='red'
            return;
        }
        else
        {
            error.innerHTML=''
        }
    if(files.size/(1024*1024)>5)
        {
             error.innerHTML='chỉ load hình ảnh dưới 5mb'
             error.style.color='red'
             return
        }
        else
        {
             error.innerHTML=''
        }
    var img = document.createElement('img');
    // img.src= URL.createObjectURL(files);
    var fileReader = new FileReader();
    fileReader.readAsDataURL(files);
   fileReader.onloadend = function(e){
        // console.log('load oki',e.target.result);
        img.src=e.target.result
        }
    preview.appendChild(img)

    // console.log(URL.createObjectURL(upload.files[0]))
})
