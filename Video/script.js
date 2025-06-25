// Lắng nghe sự kiện DOMContentLoaded để đảm bảo HTML đã được tải đầy đủ
document.addEventListener('DOMContentLoaded', function() {
    // Lấy tham chiếu đến TẤT CẢ các nút "YÊU THÍCH" bằng class của nó
    const likeButtons = document.querySelectorAll('.like-button'); // Đã sửa từ getElementById

    // Lặp qua từng nút và thêm bộ lắng nghe sự kiện
    likeButtons.forEach(button => { // Sử dụng forEach để xử lý từng nút
        button.addEventListener('click', function() {
            // 'this' trong ngữ cảnh này sẽ tham chiếu đến nút được click
            if (this.classList.contains('liked-button')) {
                // Nếu đã theo dõi, chuyển về trạng thái ban đầu
                this.textContent = 'YÊU THÍCH';
                this.classList.remove('liked-button');
                this.classList.add('like-button');
            } else {
                // Nếu chưa theo dõi, chuyển sang trạng thái đã theo dõi
                this.textContent = 'ĐÃ LƯU VÀO YÊU THÍCH';
                this.classList.add('liked-button');
                this.classList.remove('like-button');
            }
        });
    });

    // Phần code tìm kiếm và phân trang của bạn
    const courseList = document.querySelector(".container");
    const searchInput = document.getElementById("searchInput");
    const pagination = document.getElementById("pagination");

    const allCards = Array.from(courseList.getElementsByClassName("card"));
    let filteredCards = [...allCards];

    const itemsPerPage = 6;
    let currentPage = 1;

    function showPage(page) {
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;

        allCards.forEach(card => card.style.display = "none");

        filteredCards.forEach((card, index) => {
            if (index >= start && index < end) {
                card.style.display = "flex";
            }
        });
    }

    function renderPagination() {
        pagination.innerHTML = "";
        const totalPages = Math.ceil(filteredCards.length / itemsPerPage);
        if (totalPages <= 1) return;

        pagination.appendChild(createButton("«", () => {
            currentPage = 1;
            showPage(currentPage);
            renderPagination();
        }));

        pagination.appendChild(createButton("‹", () => {
            if (currentPage > 1) currentPage--;
            showPage(currentPage);
            renderPagination();
        }));

        for (let i = 1; i <= totalPages; i++) {
            const btn = createButton(i, () => {
                currentPage = i;
                showPage(currentPage);
                renderPagination();
            });
            if (i === currentPage) btn.classList.add("active");
            pagination.appendChild(btn);
        }

        pagination.appendChild(createButton("›", () => {
            if (currentPage < totalPages) currentPage++;
            showPage(currentPage);
            renderPagination();
        }));

        pagination.appendChild(createButton("»", () => {
            currentPage = totalPages;
            showPage(currentPage);
            renderPagination();
        }));
    }

    function createButton(label, onClick) {
        const button = document.createElement("button");
        button.textContent = label;
        button.addEventListener("click", onClick);
        return button;
    }

    searchInput.addEventListener("keyup", function () {
        const keyword = this.value.toLowerCase();

        filteredCards = allCards.filter(card => {
            const author = card.querySelector(".author")?.textContent.toLowerCase() || "";
            const title = card.querySelector(".title strong")?.textContent.toLowerCase() || ""; // Thêm tìm kiếm theo title
            return author.includes(keyword) || title.includes(keyword); // Tìm kiếm cả tác giả và tiêu đề
        });

        currentPage = 1;
        showPage(currentPage);
        renderPagination();
    });

    // Hiển thị lần đầu
    showPage(currentPage);
    renderPagination();
});
