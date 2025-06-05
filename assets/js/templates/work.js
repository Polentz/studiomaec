window.addEventListener("load", () => {
    lightbox(document.querySelectorAll(".main"));
    lightbox(document.querySelectorAll(".related-section"));
    accordion();
    gridAccordionTemplate();
});

window.addEventListener("resize", () => {
    gridAccordionTemplate();
});