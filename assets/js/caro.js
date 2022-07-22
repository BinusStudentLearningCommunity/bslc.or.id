let carouselData
let carouselIndex = 0
let carouselTime = 3000
let animationTime = 500
let caller = []

$(() => {
  $.getJSON('./assets/data/carousel.json', (data) => {
    carouselData = data
    updateCarousel();
  })
})

function updateCarousel() {
  clearCaller()

  let foreground = $('.carousel-foreground')
  let background = $('.carousel-background')
  foreground.removeClass('hide')
  foreground.css('background-image', `url(./assets/caro-assets/${carouselData.carousels[carouselIndex].image_name}.png)`)
  background.css('background-image', `url(./assets/caro-assets/${carouselData.carousels[(carouselIndex + 1) % carouselData.carousels.length].image_name}.png)`)

  if(carouselData.carousels[carouselIndex].link != null){
    $('.carousel').on('click', () => {
      window.open(carouselData.carousels[carouselIndex].link, '_blank')
    })
    $('.carousel').css('cursor', 'pointer')
  }

  caller[1] = setTimeout(() => {
    turnOffClick()

    carouselIndex = (carouselIndex + 1) % carouselData.carousels.length
    foreground.addClass('hide')
    caller[2] = setTimeout(() => {
      updateCarousel()
    }, animationTime)
  }, carouselTime)
}

function changeCarousel(adder){
  clearCaller()
  turnOffClick()

  let foreground = $('.carousel-foreground')
  let background = $('.carousel-background')

  carouselIndex = (carouselData.carousels.length + (carouselIndex + adder) % carouselData.carousels.length) % carouselData.carousels.length
  background.css('background-image', `url(./assets/caro-assets/${carouselData.carousels[carouselIndex].image_name}.png)`)
  
  foreground.addClass('hide')
  caller[2] = setTimeout(() => {
    updateCarousel()
  }, animationTime)
}


function clearCaller(){
  clearTimeout(caller[0])
  clearTimeout(caller[1])
}

function turnOffClick(){
  $('.carousel').off('click')
  $('.carousel').css('cursor', 'default')
}