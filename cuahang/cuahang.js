document.addEventListener("DOMContentLoaded", function () {
    const courseList = document.querySelector(".product-grid");
    const searchInput = document.getElementById("searchInput");
    const pagination = document.getElementById("pagination");

    const cardLinks = Array.from(courseList.getElementsByClassName("card-link"));
    let filteredLinks = [...cardLinks];

    const itemsPerPage = 9;
    let currentPage = 1;

    function showPage(page) {
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;

        cardLinks.forEach(link => link.classList.add("hidden"));

        filteredLinks.forEach((link, index) => {
            if (index >= start && index < end) {
                link.classList.remove("hidden");
            }
        });
    }

    function createButton(label, onClick) {
        const button = document.createElement("button");
        button.textContent = label;

        if (label === "...") {
            button.disabled = true;
            button.style.cursor = "default";
        } else {
            button.addEventListener("click", onClick);
        }

        return button;
    }

    function renderPagination() {
        pagination.innerHTML = "";
        const totalPages = Math.ceil(filteredLinks.length / itemsPerPage);
        if (totalPages <= 1) return;

        const addButton = (label, page = null, isActive = false) => {
            const btn = createButton(label, () => {
                if (page !== null) {
                    currentPage = page;
                    showPage(currentPage);
                    renderPagination();
                }
            });
            if (isActive) btn.classList.add("active");
            pagination.appendChild(btn);
        };

        addButton("«", 1);
        addButton("‹", currentPage > 1 ? currentPage - 1 : 1);

        const delta = 1;
        const range = [];
        const rangeWithDots = [];
        let l;

        for (let i = 1; i <= totalPages; i++) {
            if (
                i === 1 ||
                i === totalPages ||
                (i >= currentPage - delta && i <= currentPage + delta)
            ) {
                range.push(i);
            }
        }

        for (let i of range) {
            if (l) {
                if (i - l === 2) {
                    rangeWithDots.push(l + 1);
                } else if (i - l > 2) {
                    rangeWithDots.push("...");
                }
            }
            rangeWithDots.push(i);
            l = i;
        }

        rangeWithDots.forEach(i => {
            if (i === "...") {
                const dot = document.createElement("button");
                dot.textContent = "...";
                dot.disabled = true;
                dot.style.cursor = "default";
                pagination.appendChild(dot);
            } else {
                addButton(i, i, i === currentPage);
            }
        });

        addButton("›", currentPage < totalPages ? currentPage + 1 : totalPages);
        addButton("»", totalPages);
    }

    searchInput.addEventListener("keyup", function () {
        const keyword = this.value.toLowerCase();

        filteredLinks = cardLinks.filter(link => {
            const title = link.querySelector("h2")?.textContent.toLowerCase() || "";
            return title.includes(keyword);
        });

        currentPage = 1;
        showPage(currentPage);
        renderPagination();
    });

    // Khởi tạo lần đầu
    showPage(currentPage);
    renderPagination();
});
