const documentHeight = () => {
    const doc = document.documentElement;
    doc.style.setProperty("--doc-height", `${window.innerHeight}px`);
};

const headerHeight = () => {
    const doc = document.documentElement;
    const header = document.querySelector(".header");
    doc.style.setProperty("--header-height", `${header.offsetHeight}px`);
};

const footerHeight = () => {
    const doc = document.documentElement;
    const footer = document.querySelector(".footer");
    doc.style.setProperty("--footer-height", `${footer.offsetHeight}px`);
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

const accordion = () => {
    const accordion = document.querySelectorAll(".accordion");
    const allOpeners = document.querySelectorAll(".accordion-opener");
    const allContent = document.querySelectorAll(".accordion-content");
    const allPreviews = document.querySelectorAll(".topbar-image");
    accordion.forEach(item => {
        const openers = item.querySelectorAll(".accordion-opener");
        const content = item.querySelector(".accordion-content");
        const preview = item.querySelector(".topbar-image");
        openers.forEach(opener => {
            opener.addEventListener("click", () => {
                [...allOpeners].filter(i => i !== opener).forEach(i => i.classList.remove("--selected"));
                [...allContent].filter(i => i !== content).forEach(i => i.classList.remove("--open"));
                [...allPreviews].filter(i => i !== preview).forEach(i => i.classList.remove("--display"));
                opener.classList.toggle("--selected");
                content.classList.toggle("--open");
                preview.classList.toggle("--display");
                const offset = 1280;
                const itemPosition = item.getBoundingClientRect().top;
                const offsetPosition = itemPosition - offset;
                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth",
                });
            });
        });
    });
};

window.addEventListener("load", () => {
    documentHeight();
    headerHeight();
    footerHeight();
    handleHref();
    accordion();
});

window.addEventListener("resize", () => {
    documentHeight();
    headerHeight();
    footerHeight();
});