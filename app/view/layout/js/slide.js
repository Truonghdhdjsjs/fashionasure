var input = document.querySelector('#options-touch-angle-input')

var glide = new Glide('#options-touch-angle', {
  touchAngle: input.value,
  perView: 3
})

input.addEventListener('input', function (event) {
  glide.update({
    touchAngle: event.target.value
  })
})

glide.mount()