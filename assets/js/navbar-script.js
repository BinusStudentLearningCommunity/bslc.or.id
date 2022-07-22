window.addEventListener('scroll', function () {
    let navbar = document.getElementById('navbar')

    navbar.classList.toggle("sticky", window.scrollY > 0)

})

function toggleMenu() {
    
    changetoSticky();

    let menu = document.getElementById("menu")

    if (menu.className === 'menu') {
        menu.className += ' toggle'
    } else {
        menu.className = 'menu';
    }


}

function changetoSticky() {
    let navbar = document.getElementById("navbar")

    if (navbar.className == 'navbar') {
        navbar.className += ' sticky'
        
    } else {
        navbar.className == 'navbar'
    }
}




