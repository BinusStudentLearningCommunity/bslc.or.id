let carouselData
let carouselIndex = 0
let carouselTime = 5000
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

  $(`.carousel .dot#carousel-${carouselIndex}`).addClass('selected-dot')

  foreground.css('background-image', `url(./assets/caro-assets/${carouselData.carousels[carouselIndex].image_name})`)
  background.css('background-image', `url(./assets/caro-assets/${carouselData.carousels[(carouselIndex + 1) % carouselData.carousels.length].image_name})`)

  if(carouselData.carousels[carouselIndex].link != null){
    $('.linear-filter').on('click', () => {
      window.open(carouselData.carousels[carouselIndex].link, '_blank')
    })
    $('.linear-filter').css('cursor', 'pointer')
  }


  caller[1] = setTimeout(() => {
    turnOffClick()
    carouselIndex = (carouselIndex + 1) % carouselData.carousels.length
    foreground.addClass('hide')
    caller[2] = setTimeout(() => {
      $(`.carousel .dot`).removeClass('selected-dot')
      updateCarousel()
    }, animationTime)
  }, carouselTime)
}

function addDots(){
  let dotContainer = $('.carousel .dot-container')

  for(let i = 0; i < carouselData.carousels.length; i++){
    dotContainer.append(`<button class="dot" id="carousel-${i}"></button>`)
  }

  $('.carousel .dot').on('click', (e) => {
    changeCarouselSlide(parseInt($(e.target).attr('id').split('-')[1]))
  })

}

function changeCarousel(adder){
  clearCaller()
  turnOffClick()

  let foreground = $('.carousel-foreground')
  let background = $('.carousel-background')

  carouselIndex = (carouselData.carousels.length + (carouselIndex + adder) % carouselData.carousels.length) % carouselData.carousels.length
  background.css('background-image', `url(./assets/caro-assets/${carouselData.carousels[carouselIndex].image_name})`)
  
  foreground.addClass('hide')
  caller[2] = setTimeout(() => {
    $(`.carousel .dot`).removeClass('selected-dot')
    updateCarousel()
  }, animationTime)
}

function changeCarouselSlide(slide){
  clearCaller()
  turnOffClick()

  let foreground = $('.carousel-foreground')
  let background = $('.carousel-background')

  carouselIndex = slide
  background.css('background-image', `url(./assets/caro-assets/${carouselData.carousels[carouselIndex].image_name})`)
  
  foreground.addClass('hide')
  caller[2] = setTimeout(() => {
    $(`.carousel .dot`).removeClass('selected-dot')
    updateCarousel()
  }, animationTime)
}

function turnOffClick(){
  $('.linear-filter').off('click')
  $('.linear-filter').css('cursor', 'default')
}

function clearCaller(){
  clearTimeout(caller[0])
  clearTimeout(caller[1])
}
