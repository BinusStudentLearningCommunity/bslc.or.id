window.addEventListener('scroll', function () {
    let navbar = this.document.querySelector("nav")

    navbar.classList.toggle("sticky", window.scrollY > 0)

})

function toggleMenu() {
    const menu = document.getElementById("menu")
    const mediaQueryMobile = window.matchMedia('(max-width: 768px)')
    const mediaQueryDesktop = window.matchMedia('(min-width: 1025px)')

    if (mediaQueryMobile.matches) {
        if (menu.style.display == 'block') {
            document.getElementById('menu').style.display = "none"
            document.getElementById('navbar').style.height = 'auto'

        } else {
            document.getElementById('menu').style.display = "block"
            document.getElementById('navbar').style.height = '14rem'
        }

    }

    if (mediaQueryDesktop.matches) {
        document.getElementById('menu').style.display = "block"
        document.getElementById('navbar').style.height = 'auto'



    }



}

