window.addEventListener("load", () => {
    lightbox(document.querySelectorAll(".main"));
    accordion();
    gridAccordionTemplate();
});

window.addEventListener("resize", () => {
    gridAccordionTemplate();
});