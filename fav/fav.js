// Lắng nghe sự kiện DOMContentLoaded để đảm bảo HTML đã được tải đầy đủ
document.addEventListener('DOMContentLoaded', function() {
    // Lấy tham chiếu đến TẤT CẢ các nút "YÊU THÍCH" bằng class của nó
    const likeButtons = document.querySelectorAll('.like-button'); 

    // Lặp qua từng nút và thêm bộ lắng nghe sự kiện
    likeButtons.forEach(button => { 
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

    const itemsPerPage = 2; // Đã thay đổi từ 6 thành 2 để mỗi trang hiển thị 2 video
    let currentPage = 1;

    function showPage(page) {
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;

        allCards.forEach(card => card.style.display = "none"); // Ẩn tất cả các card

        filteredCards.forEach((card, index) => {
            if (index >= start && index < end) {
                card.style.display = "flex"; // Hiển thị các card thuộc trang hiện tại
            }
        });
    }

    function renderPagination() {
        pagination.innerHTML = "";
        const totalPages = Math.ceil(filteredCards.length / itemsPerPage);
        
        if (totalPages <= 1 && filteredCards.length > 0) { 
            // Nếu chỉ có 1 trang và có nội dung, vẫn hiển thị nút trang 1
             const btn = createButton(1, () => {
                currentPage = 1;
                showPage(currentPage);
                renderPagination();
            });
            btn.classList.add("active");
            pagination.appendChild(btn);
            return;
        } else if (totalPages === 0) { // Nếu không có kết quả tìm kiếm nào
            return;
        }

        // Nút lùi về trang đầu
        pagination.appendChild(createButton("«", () => {
            currentPage = 1;
            showPage(currentPage);
            renderPagination();
        }));

        // Nút lùi về trang trước
        pagination.appendChild(createButton("‹", () => {
            if (currentPage > 1) currentPage--;
            showPage(currentPage);
            renderPagination();
        }));

        // Các nút số trang
        for (let i = 1; i <= totalPages; i++) {
            const btn = createButton(i, () => {
                currentPage = i;
                showPage(currentPage);
                renderPagination();
            });
            if (i === currentPage) btn.classList.add("active");
            pagination.appendChild(btn);
        }

        // Nút tiến lên trang sau
        pagination.appendChild(createButton("›", () => {
            if (currentPage < totalPages) currentPage++;
            showPage(currentPage);
            renderPagination();
        }));

        // Nút tiến đến trang cuối
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
        const keyword = this.value.toLowerCase().trim(); // Thêm .trim() để loại bỏ khoảng trắng thừa

        filteredCards = allCards.filter(card => {
            const author = card.querySelector(".author")?.textContent.toLowerCase() || "";
            const title = card.querySelector(".title strong")?.textContent.toLowerCase() || ""; 
            return author.includes(keyword) || title.includes(keyword); 
        });

        currentPage = 1; // Reset về trang 1 khi tìm kiếm mới
        showPage(currentPage);
        renderPagination();
    });

    // Hiển thị lần đầu
    showPage(currentPage);
    renderPagination();
});

document.addEventListener("DOMContentLoaded", function () {
    const trainerList = document.getElementById("trainerList");
    const trainerCards = Array.from(trainerList.getElementsByClassName("trainer-card"));
    // Dòng này đã được cập nhật để sử dụng ID mới:
    const trainerPagination = document.getElementById("trainerPagination"); 
    const searchInput = document.getElementById("searchInput"); 

    let filteredTrainerCards = [...trainerCards];
    const itemsPerPage = 3; // Số trainer trên mỗi trang

    let currentPage = 1;

    function showPage(page) {
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;

        trainerCards.forEach(card => card.style.display = "none");

        filteredTrainerCards.forEach((card, index) => {
            if (index >= start && index < end) {
                card.style.display = "block"; // hoặc "flex" nếu bạn có layout flex
            }
        });
    }

    function renderPagination() {
        trainerPagination.innerHTML = "";
        const totalPages = Math.ceil(filteredTrainerCards.length / itemsPerPage);
        if (totalPages <= 1) return;

        trainerPagination.appendChild(createButton("«", () => {
            currentPage = 1;
            showPage(currentPage);
            renderPagination();
        }));

        trainerPagination.appendChild(createButton("‹", () => {
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
            trainerPagination.appendChild(btn);
        }

        trainerPagination.appendChild(createButton("›", () => {
            if (currentPage < totalPages) currentPage++;
            showPage(currentPage);
            renderPagination();
        }));

        trainerPagination.appendChild(createButton("»", () => {
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

    if (searchInput) {
        searchInput.addEventListener("keyup", function () {
            const keyword = this.value.toLowerCase();

            filteredTrainerCards = trainerCards.filter(card => {
                const name = card.querySelector("h3").textContent.toLowerCase();
                return name.includes(keyword);
            });

            currentPage = 1;
            showPage(currentPage);
            renderPagination();
        });
    }

    showPage(currentPage);
    renderPagination();
});

document.addEventListener("DOMContentLoaded", function () {
    // Lấy phần tử chứa tất cả các thẻ khóa học
    // Đã đổi từ "trainerList" thành "courseList"
    const courseList = document.getElementById("courseList");

    // Lấy phần tử input tìm kiếm
    // Đã đổi từ "searchInput" thành "courseSearchInput"
    const courseSearchInput = document.getElementById("courseSearchInput");

    // Lấy phần tử thanh phân trang
    // Đã đổi từ "pagination" thành "coursePagination"
    const coursePagination = document.getElementById("coursePagination");

    // Lấy tất cả các thẻ khóa học
    // Đã đổi từ "course" thành "course-card"
    const allCourseCards = Array.from(courseList.getElementsByClassName("course-card"));
    
    // Tạo một bản sao của danh sách khóa học để lọc
    let filteredCourseCards = [...allCourseCards];

    const itemsPerPage = 6; // Mỗi trang hiển thị 6 khóa học
    let currentPage = 1;

    // Hàm hiển thị trang cụ thể
    function showPage(page) {
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;

        // Ẩn tất cả các thẻ khóa học
        allCourseCards.forEach(card => card.style.display = "none");

        // Hiển thị các thẻ thuộc trang hiện tại
        filteredCourseCards.forEach((card, index) => {
            if (index >= start && index < end) {
                card.style.display = "block"; // hoặc "flex" tùy theo CSS layout của bạn
            }
        });
    }

    // Hàm tạo và hiển thị thanh phân trang
    function renderPagination() {
        coursePagination.innerHTML = ""; // Xóa các nút phân trang cũ
        const totalPages = Math.ceil(filteredCourseCards.length / itemsPerPage);
        if (totalPages <= 1) return; // Không hiển thị phân trang nếu chỉ có 1 trang hoặc ít hơn

        // Nút "Trang đầu tiên"
        coursePagination.appendChild(createButton("«", () => {
            currentPage = 1;
            showPage(currentPage);
            renderPagination();
        }));

        // Nút "Trang trước"
        coursePagination.appendChild(createButton("‹", () => {
            if (currentPage > 1) currentPage--;
            showPage(currentPage);
            renderPagination();
        }));

        // Các nút số trang
        for (let i = 1; i <= totalPages; i++) {
            const btn = createButton(i, () => {
                currentPage = i;
                showPage(currentPage);
                renderPagination();
            });
            if (i === currentPage) btn.classList.add("active"); // Thêm class 'active' cho trang hiện tại
            coursePagination.appendChild(btn);
        }

        // Nút "Trang kế tiếp"
        coursePagination.appendChild(createButton("›", () => {
            if (currentPage < totalPages) currentPage++;
            showPage(currentPage);
            renderPagination();
        }));

        // Nút "Trang cuối cùng"
        coursePagination.appendChild(createButton("»", () => {
            currentPage = totalPages;
            showPage(currentPage);
            renderPagination();
        }));
    }

    // Hàm trợ giúp để tạo nút HTML
    function createButton(label, onClick) {
        const button = document.createElement("button");
        button.textContent = label;
        button.addEventListener("click", onClick);
        return button;
    }

    // 🔍 Xử lý sự kiện tìm kiếm theo tên khóa học
    // Đã đổi từ searchInput thành courseSearchInput
    if (courseSearchInput) { // Đảm bảo phần tử tìm kiếm tồn tại
        courseSearchInput.addEventListener("keyup", function () {
            const keyword = this.value.toLowerCase();

            filteredCourseCards = allCourseCards.filter(card => {
                // Đã đổi từ "p" (tên tác giả) thành "h3" (tên khóa học) để tìm kiếm theo tên khóa học
                const title = card.querySelector("h3").textContent.toLowerCase();
                return title.includes(keyword);
            });

            currentPage = 1; // Đặt lại về trang đầu tiên sau khi lọc
            showPage(currentPage);
            renderPagination();
        });
    }

    // Hiển thị trang đầu tiên khi tải trang
    showPage(currentPage);
    renderPagination();
});
document.addEventListener("DOMContentLoaded", function () {
  const container = document.querySelector(".container");
  const favs = JSON.parse(localStorage.getItem("favorites")) || [];

  container.innerHTML = "";

  favs.forEach(item => {
    const card = document.createElement("div");
    card.className = "card";
    card.innerHTML = `
      <a href="${item.url}" target="_blank">
        <img src="${item.img}" alt="Thumbnail" class="card-image" />
        <div class="card-content">
          <p class="author">${item.author}</p>
          <p class="title"><strong>${item.title}</strong></p>
          <p class="meta">${item.meta}</p>
        </div>
      </a>
      <button class="like-button" onclick="removeFavorite('${item.url}')">BỎ YÊU THÍCH</button>
    `;
    container.appendChild(card);
  });
});

function removeFavorite(url) {
  let favs = JSON.parse(localStorage.getItem("favorites")) || [];
  favs = favs.filter(item => item.url !== url);
  localStorage.setItem("favorites", JSON.stringify(favs));
  location.reload();
}