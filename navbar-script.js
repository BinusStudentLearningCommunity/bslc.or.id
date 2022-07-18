window.addEventListener('scroll', function () {
    let navbar = this.document.querySelector("nav")

    navbar.classList.toggle("sticky", window.scrollY > 0)

})

function toggleMenu() {
    const navbar = document.getElementById('navbar')

    if (navbar.className == '') {
        navbar.className += 'responsive'
    } else {
        navbar.className += ''
    }


}

