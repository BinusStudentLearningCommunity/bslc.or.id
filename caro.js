let idx = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("inslide");
    let dots = document.getElementsByClassName("dot");
    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    
    idx++;
  
    if (idx > slides.length){
        idx = 1
    }    
    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    
    slides[idx - 1].style.display = "block";  
    dots[idx - 1].className += " active";
    setTimeout(showSlides, 3000);
}