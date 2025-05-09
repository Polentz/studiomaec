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
    const accordions = document.querySelectorAll(".accordion");
    const contents = document.querySelectorAll(".accordion-content");
    const buttons = document.querySelectorAll(".button.plus-minus");
    accordions.forEach(accordion => {
        const button = accordion.querySelector(".button.plus-minus");
        const openers = accordion.querySelectorAll(".accordion-opener", button);
        const content = accordion.querySelector(".accordion-content");
        const excludedButton = accordion.querySelector(".button.go");
        openers.forEach(opener => {
            if (excludedButton) {
                excludedButton.addEventListener("click", event => event.stopPropagation());
            };
            opener.addEventListener("click", () => {
                if (accordion.classList.contains("alternate")) {
                    [...accordions].filter(i => i !== accordion).forEach(i => i.classList.remove("selected"));
                    [...contents].filter(i => i !== content).forEach(i => i.classList.remove("open"));
                    [...buttons].filter(i => i !== button).forEach(i => i.classList.remove("minus"));
                };
                accordion.classList.toggle("selected");
                content.classList.toggle("open");
                button.classList.toggle("minus");
                // const offset = 160;
                // const itemPosition = accordion.getBoundingClientRect().top;
                // const offsetPosition = itemPosition - offset;
                // window.scrollTo({
                //     top: offsetPosition,
                //     behavior: "smooth",
                // });            
            });
        });
    });
};

const sortAccordion = () => {  
    const sortButtons = document.querySelectorAll('.topbar-label[data-item]');
    const svgs = document.querySelectorAll(".topbar-label svg");
    const container = document.querySelector(".list");

    let currentSort = {
        key: null,
        ascending: true
    };

    // svgs[0].classList.add("asc");

    sortButtons.forEach(button => {
        button.addEventListener("click", () => {
            const sortKey = button.dataset.item;
            const svg = button.querySelector("svg");

            const isSameKey = currentSort.key === sortKey;
            currentSort.key = sortKey;
            currentSort.ascending = isSameKey ? !currentSort.ascending : true;

            sortButtons.forEach(btn => {
                const arrow = btn.querySelector("svg");
                if (arrow) {
                    arrow.classList.remove("asc", "desc");
                };
            });
            if (svg) {
                svg.classList.add(currentSort.ascending ? "asc" : "desc");
            };

            const items = Array.from(document.querySelectorAll(".list-item"));

            items.sort((a, b) => {
                let aValue = a.dataset[sortKey] || "";
                let bValue = b.dataset[sortKey] || "";

                aValue = sortKey === "type" ? aValue.toLowerCase() : aValue;
                bValue = sortKey === "type" ? bValue.toLowerCase() : bValue;

                if (sortKey === "date") {
                    aValue = new Date(aValue).getTime();
                    bValue = new Date(bValue).getTime();
                }

                if (aValue < bValue) return currentSort.ascending ? -1 : 1;
                if (aValue > bValue) return currentSort.ascending ? 1 : -1;
                return 0;
            });

            items.forEach(item => container.appendChild(item));
        });
    });
};

window.addEventListener("load", () => {
    documentHeight();
    headerHeight();
    footerHeight();
    handleHref();
    slideshow();
});

window.addEventListener("resize", () => {
    documentHeight();
    headerHeight();
    footerHeight();
});