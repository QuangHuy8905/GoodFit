
  const buttons = document.querySelectorAll('.like-button');

  buttons.forEach(button => {
    button.addEventListener('click', function () {
      this.classList.toggle('liked');

      if (this.classList.contains('liked')) {
        this.textContent = 'ĐÃ THÊM VÀO YÊU THÍCH';
      } else {
        this.textContent = 'YÊU THÍCH';
      }
    });
  });



document.addEventListener("DOMContentLoaded", function () {
  const courseList = document.querySelector(".container"); // Chứa tất cả .card
  const searchInput = document.getElementById("searchInput");
  const pagination = document.getElementById("pagination");

  const allCards = Array.from(courseList.getElementsByClassName("card"));
  let filteredCards = [...allCards];

  const itemsPerPage = 6; // Mỗi trang hiển thị 6 thẻ card
  let currentPage = 1;

  function showPage(page) {
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;

    allCards.forEach(card => card.style.display = "none");

    filteredCards.forEach((card, index) => {
      if (index >= start && index < end) {
        card.style.display = "flex"; // flex để giữ layout dạng ô
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

  // 🔍 Tìm kiếm theo nội dung <p class="title">
  searchInput.addEventListener("keyup", function () {
    const keyword = this.value.toLowerCase();

    filteredCards = allCards.filter(card => {
      const title = card.querySelector(".author")?.textContent.toLowerCase() || "";
      return title.includes(keyword);
    });

    currentPage = 1;
    showPage(currentPage);
    renderPagination();
  });

  // Hiển thị lần đầu
  showPage(currentPage);
  renderPagination();
});
