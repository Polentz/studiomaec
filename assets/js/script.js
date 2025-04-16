const documentHeight = () => {
    const doc = document.documentElement;
    doc.style.setProperty("--doc-height", `${window.innerHeight}px`);
};

const handleHref = () => {
    const anchorTags = document.querySelectorAll(".js-href");
    if (anchorTags) {
        anchorTags.forEach(link => {
            link.addEventListener("click", (event) => {
                event.preventDefault();
                const href = link.getAttribute("href");
                document.querySelector(href).scrollIntoView({
                    behavior: "smooth"
                });
            });
        });
    };
};

window.addEventListener("load", () => {
    documentHeight();
    handleHref();
});

window.addEventListener("resize", () => {
    documentHeight();
});