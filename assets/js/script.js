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
    const accordions = document.querySelectorAll(".accordion-opener");
    const contents = document.querySelectorAll(".accordion-content");
    const previews = document.querySelectorAll(".topbar-image");
    const buttons = document.querySelectorAll(".button.plus-minus");
    
    accordions.forEach(opener => {
        opener.addEventListener("click", () => {
            const openerId = opener.getAttribute("data-id");
            const content = document.querySelector(`.accordion-content[data-id="${openerId}"]`);
            const preview = opener.querySelector(".topbar-image");
            const button = opener.querySelector(".button.plus-minus");
            [...accordions].filter(i => i !== opener).forEach(i => i.classList.remove("--selected"));
            [...contents].filter(i => i !== content).forEach(i => i.classList.remove("--open"));
            [...previews].filter(i => i !== preview).forEach(i => i.classList.remove("--display"));
            [...buttons].filter(i => i !== button).forEach(i => i.classList.remove("--minus"));
            opener.classList.toggle("--selected");
            content.classList.toggle("--open");
            preview.classList.toggle("--display");
            button.classList.toggle("--minus");
            const offset = 1280;
            const itemPosition = opener.getBoundingClientRect().top;
            const offsetPosition = itemPosition - offset;
            window.scrollTo({
                top: offsetPosition,
                behavior: "smooth",
            });
        });
    });
};

const sortTable = (n) => {
    let table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("table");
    switching = true;
    dir = "asc"; 
    while (switching) {
        switching = false;
        rows = table.rows;
        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName("TD")[n];
            y = rows[i + 1].getElementsByTagName("TD")[n];
            if (dir == "asc") {
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                shouldSwitch = true;
                break;
            };
            } else if (dir == "desc") {
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                shouldSwitch = true;
                break;
            };
            };
        };
        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            switchcount ++;      
        } else {
            if (switchcount == 0 && dir == "asc") {
            dir = "desc";
            switching = true;
            };
        };
    };
};

const toggleArrow = (header) => {
    const headers = document.querySelectorAll(".list-topbar-header th");
    const isAsc = header.classList.contains("asc");

    if (isAsc) {
        [...headers].filter(i => i !== header).forEach(i => i.classList.remove("desc", "asc"));
        header.classList.remove("asc");
        header.classList.add("desc");
    } else {
        [...headers].filter(i => i !== header).forEach(i => i.classList.remove("asc", "desc"));
        header.classList.remove("desc");
        header.classList.add("asc");
    };
};

document.addEventListener("DOMContentLoaded", () => {
    const headers = document.querySelectorAll(".list-topbar-header th");

    headers.forEach((header, index) => {
        header.addEventListener("click", () => {
            sortTable(index);
            toggleArrow(header);
        });
    });
});

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