window.addEventListener('scroll', function () {
    let navbar = document.getElementById('navbar')

    
    if(this.window.scrollY > 0){
        $('#navbar').addClass('sticky');
    }
    else if(this.window.scrollY == 0 && !($('#menu').hasClass('toggle')) ){
        $('#navbar').removeClass('sticky');

    }

})

function toggleMenu() {
    
    $('#menu').toggleClass('toggle')
    if(window.scrollY === 0 ){
        $('#navbar').toggleClass('sticky');
    }    
}