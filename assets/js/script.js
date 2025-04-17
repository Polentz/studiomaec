const documentHeight = () => {
    const doc = document.documentElement;
    doc.style.setProperty("--doc-height", `${window.innerHeight}px`);
};

const footerHeight = () => {
    const doc = document.documentElement;
    const footer = document.querySelector(".footer");
    doc.style.setProperty("--footer-height", `${footer.offsetHeight}px`);
    console.log(footer.offsetHeight);
};

const handleHref = () => {
    const anchorTags = document.querySelectorAll(".js-href");
    if (anchorTags) {
        anchorTags.forEach(a => {
            a.addEventListener("click", (event) => {
                event.preventDefault();
                const href = a.getAttribute("href");
                document.querySelector(href).scrollIntoView({
                    behavior: "smooth"
                });
            });
        });
    };
};

window.addEventListener("load", () => {
    documentHeight();
    footerHeight();
    handleHref();
});

window.addEventListener("resize", () => {
    documentHeight();
    footerHeight();
});