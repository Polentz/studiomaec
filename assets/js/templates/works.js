window.addEventListener("load", () => {
    accordion();
    sortAccordion();
    gridAccordionTemplate();
    lightbox(document.querySelectorAll(".list-content-image"));
});

window.addEventListener("resize", () => {
    gridAccordionTemplate();
});