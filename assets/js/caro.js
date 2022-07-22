let carouselData
let carouselIndex = 0
let carouselTime = 3000
let animationTime = 500
let caller = []

$(() => {
  $.getJSON('./assets/data/carousel.json', (data) => {
    carouselData = data
    addDots()
    updateCarousel();
  })
})

function updateCarousel() {
  clearCaller()

  let foreground = $('.carousel-foreground')
  let background = $('.carousel-background')
  foreground.removeClass('hide')

  $(`.dot#${carouselIndex}`).addClass('selected-dot')

  foreground.css('background-image', `url(./assets/caro-assets/${carouselData.carousels[carouselIndex].image_name}.png)`)
  background.css('background-image', `url(./assets/caro-assets/${carouselData.carousels[(carouselIndex + 1) % carouselData.carousels.length].image_name}.png)`)

  if(carouselData.carousels[carouselIndex].link != null){
    $('.main-content').on('click', () => {
      window.open(carouselData.carousels[carouselIndex].link, '_blank')
    })
    $('.main-content').css('cursor', 'pointer')
  }


  caller[1] = setTimeout(() => {
    turnOffClick()
    carouselIndex = (carouselIndex + 1) % carouselData.carousels.length
    foreground.addClass('hide')
    caller[2] = setTimeout(() => {
      $(`.dot`).removeClass('selected-dot')
      updateCarousel()
    }, animationTime)
  }, carouselTime)
}

function addDots(){
  let dotContainer = $('.dot-container')

  for(let i = 0; i < carouselData.carousels.length; i++){
    dotContainer.append(`<button class="dot" id="${i}"></button>`)
  }

  $('.dot').on('click', (e) => {
    changeCarouselSlide(parseInt($(e.target).attr('id')))
  })

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
    $(`.dot`).removeClass('selected-dot')
    updateCarousel()
  }, animationTime)
}

function changeCarouselSlide(slide){
  clearCaller()
  turnOffClick()

  let foreground = $('.carousel-foreground')
  let background = $('.carousel-background')

  carouselIndex = slide
  background.css('background-image', `url(./assets/caro-assets/${carouselData.carousels[carouselIndex].image_name}.png)`)
  
  foreground.addClass('hide')
  caller[2] = setTimeout(() => {
    $(`.dot`).removeClass('selected-dot')
    updateCarousel()
  }, animationTime)
}

function turnOffClick(){
  $('.main-content').off('click')
  $('.main-content').css('cursor', 'default')
}

function clearCaller(){
  clearTimeout(caller[0])
  clearTimeout(caller[1])
}
