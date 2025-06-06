window.addEventListener("load", () => {
    updateImageWrapperHeight();
    slideshow();
    lightbox(document.querySelectorAll(".grid-item"));
});

window.addEventListener("resize", () => {
    updateImageWrapperHeight();
});