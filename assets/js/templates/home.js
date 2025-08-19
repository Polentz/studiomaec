window.addEventListener("load", () => {
    updateImageWrapperHeight();
    showCounter(mediaQuery);
    slideshow();
    lightbox(document.querySelectorAll(".grid-item"));
});

window.addEventListener("resize", () => {
    updateImageWrapperHeight();
    showCounter(mediaQuery);
});