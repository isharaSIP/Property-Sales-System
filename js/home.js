let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("dot");
    
    // Hide all slides initially
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // Reset the slide index if it exceeds the number of slides
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    // Remove the active class from all dots
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    // Display the current slide and mark the corresponding dot as active
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";

    // Change the image every 4 seconds
    setTimeout(showSlides, 4000);
}
