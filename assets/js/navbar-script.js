window.addEventListener('scroll', function () {
    let navbar = document.getElementById('navbar')
    navbar.classList.toggle("sticky", window.scrollY > 0)

})

function toggleMenu() {
    let menu = document.getElementById("menu")

    if (menu.className === 'menu') {
        menu.className += ' toggle'
    } else {
        menu.className = 'menu';
    }


}




