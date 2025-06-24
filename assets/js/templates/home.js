window.addEventListener("load", () => {
    updateImageWrapperHeight();
    showCounter();
    slideshow();
    lightbox(document.querySelectorAll(".grid-item"));
});

window.addEventListener("resize", () => {
    updateImageWrapperHeight();
});