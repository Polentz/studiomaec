const documentHeight = () => {
    const doc = document.documentElement;
    doc.style.setProperty("--doc-height", `${window.innerHeight}px`);
};

window.addEventListener("load", () => {
    documentHeight();
});

window.addEventListener("resize", () => {
    documentHeight();
});