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

const lightbox = () => {
    const galleryImages = document.querySelectorAll(".intro-info-image img, .item-images-wrapper img");
    const container = document.querySelector(".main");
    
    const openLightbox = (startIndex) => {
        const lightbox = document.createElement("section");
        lightbox.classList.add("lightbox-section");
    
        const closeBtn = document.createElement("span");
        closeBtn.classList.add("button", "close");
        closeBtn.setAttribute("aria-label", "Close");
        closeBtn.setAttribute("role", "button");
        closeBtn.innerHTML = `
        <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.45679 7.39349L14.5279 14.4646"/>
            <path d="M14.5278 7.39349L7.45676 14.4646"/>
        </svg>
        `;
    
        const lightboxImg = document.createElement("img");
        
        const counter = document.createElement("div");
        counter.classList.add("counter", "text-small", "weight-500");
        const icons = document.createElement("div");
        icons.classList.add("icons");
        const prevBtn = document.createElement("button");
        prevBtn.classList.add("button", "left");
        prevBtn.innerHTML = `
        <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.49951 11H16.4995"></path>
            <path d="M10.4995 7L6.49951 11L10.4995 15"></path>
        </svg>
        `;
        const nextBtn = document.createElement("button");
        nextBtn.classList.add("button", "right");
        nextBtn.innerHTML = `
        <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.5005 11L6.50049 11"></path>
            <path d="M12.5005 15L16.5005 11L12.5005 7"></path>
        </svg>
        `;

        icons.append(prevBtn, counter, nextBtn);
        lightbox.append(lightboxImg, icons, closeBtn);
        container.appendChild(lightbox);

        let currentIndex = startIndex;

        const updateLightbox = () => {
            lightboxImg.src = galleryImages[currentIndex].src;
            counter.innerHTML = `<span class="counter-num">${currentIndex + 1}</span> / <span class="counter-lenght">${galleryImages.length}</span>`;
        }

        prevBtn.onclick = () => {
            currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
            updateLightbox();
            };

        nextBtn.onclick = () => {
            currentIndex = (currentIndex + 1) % galleryImages.length;
            updateLightbox();
        };

        closeBtn.onclick = () => {
            container.removeChild(lightbox);
        };

        // container.onclick = () => {
        //     container.removeChild(lightbox);
        // };
        
        updateLightbox();
    };

    galleryImages.forEach((img, index) => {
        img.addEventListener("click", () => openLightbox(index));
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