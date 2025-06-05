window.addEventListener("load", () => {
    updateImageWrapperHeight();
    slideshow();
    accordion();
    lightbox(document.querySelectorAll(".grid-item"));
});

window.addEventListener("resize", () => {
    updateImageWrapperHeight();
});