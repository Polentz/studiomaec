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

const slideshow = () => {
    const items = document.querySelectorAll(".grid-item");
    items.forEach(item => {
        const figures = item.querySelectorAll(".item-images figure");
        const images = item.querySelectorAll(".item-images img");
        const counter = item.querySelector(".counter-num");
        const prev = item.querySelector(".button.left");
        const next = item.querySelector(".button.right");
        const imageWrapper = item.querySelector(".item-images");

        let slideIndex = 1;

        if (figures.length > 0) {
            figures[0].classList.add("active");
        };

        if (figures.length > 1) {
            const plusSlides = (n) => {
                showSlides(slideIndex += n);
            };

            const showSlides = (n) => {
                if (n > figures.length) slideIndex = 1;
                if (n < 1) slideIndex = figures.length;

                figures.forEach((figure, i) => {
                    figure.classList.remove("active");
                    gsap.to(figure.querySelector("img"), {
                        scale: 1,
                        duration: 0.3,
                        ease: "power1.out",
                    });
                });

                const activeFigure = figures[slideIndex - 1];
                activeFigure.classList.add("active");
                counter.innerHTML = slideIndex;

                gsap.to(activeFigure.querySelector("img"), {
                    scale: 1.035,
                    duration: 0.3,
                    ease: "power1.out",
                });
            };

            next.addEventListener("click", () => plusSlides(1));
            prev.addEventListener("click", () => plusSlides(-1));

            showSlides(slideIndex);
        };

        // tallest image:
        // const updateImageWrapperHeight = () => {
        //     let maxHeight = 0;
        //     let loadedCount = 0;

        //     images.forEach(img => {
        //         const measure = () => {
        //             const height = img.naturalHeight / img.naturalWidth * img.offsetWidth;
        //             if (height > maxHeight) maxHeight = height;
        //             loadedCount++;
        //             if (loadedCount === images.length) {
        //                 imageWrapper.style.height = `${maxHeight}px`;
        //             }
        //         };

        //         if (img.complete) {
        //             measure();
        //         } else {
        //             img.onload = measure;
        //         }
        //     });
        // };

        // first image:
        const updateImageWrapperHeight = () => {
            const firstImg = images[0];
            if (!firstImg) return;
        
            const setHeight = () => {
                const height = firstImg.naturalHeight / firstImg.naturalWidth * firstImg.offsetWidth;
                imageWrapper.style.height = `${height}px`;
            };
        
            if (firstImg.complete) {
                setHeight();
            } else {
                firstImg.onload = setHeight;
            }
        };

        updateImageWrapperHeight();
        window.addEventListener("resize", updateImageWrapperHeight);
    });
};

const accordion = () => {
    const accordions = document.querySelectorAll(".accordion-opener");
    const contents = document.querySelectorAll(".accordion-content");
    const previews = document.querySelectorAll(".topbar-image");
    const buttons = document.querySelectorAll(".button.plus-minus");
    
    accordions.forEach(accordion => {
        const openers = accordion.querySelectorAll(".accordion-opener .topbar-label, .button.plus-minus");
        openers.forEach(opener => {
            opener.addEventListener("click", () => {
                const openerId = accordion.getAttribute("data-id");
                const content = document.querySelector(`.accordion-content[data-id="${openerId}"]`);
                const preview = accordion.querySelector(".topbar-image");
                const button = accordion.querySelector(".button.plus-minus");
                [...accordions].filter(i => i !== accordion).forEach(i => i.classList.remove("--selected"));
                [...contents].filter(i => i !== content).forEach(i => i.classList.remove("--open"));
                [...previews].filter(i => i !== preview).forEach(i => i.classList.remove("--display"));
                [...buttons].filter(i => i !== button).forEach(i => i.classList.remove("--minus"));
                accordion.classList.toggle("--selected");
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
    });
};

const handleTable = () => {
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

    const headers = document.querySelectorAll(".list-topbar-header th");

    const toggleArrow = (header) => {
        // const headers = document.querySelectorAll(".list-topbar-header th");
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
    
    // document.addEventListener("DOMContentLoaded", () => {
    //     const headers = document.querySelectorAll(".list-topbar-header th");
    
    //     headers.forEach((header, index) => {
    //         header.addEventListener("click", () => {
    //             sortTable(index);
    //             toggleArrow(header);
    //         });
    //     });
    // });

    // const headers = document.querySelectorAll(".list-topbar-header th");
    
    headers.forEach((header, index) => {
        header.addEventListener("click", () => {
            sortTable(index);
            toggleArrow(header);
        });
    });
};

window.addEventListener("load", () => {
    documentHeight();
    headerHeight();
    footerHeight();
    handleHref();
    accordion();
    slideshow();
    handleTable();
});

window.addEventListener("resize", () => {
    documentHeight();
    headerHeight();
    footerHeight();
});