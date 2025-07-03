document.addEventListener("DOMContentLoaded", function () {
  const trainerList = document.getElementById("trainerList");
  const cards = Array.from(trainerList.getElementsByClassName("card"));
  const pagination = document.getElementById("pagination");
  const searchInput = document.getElementById("searchInput");

  let filteredCards = [...cards];
  const itemsPerPage = 9; // Số trainer trên mỗi trang

  let currentPage = 1;

  function showPage(page) {
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;

    cards.forEach(card => card.style.display = "none");

    filteredCards.forEach((card, index) => {
      if (index >= start && index < end) {
        card.style.display = "block"; // hoặc "flex" nếu bạn có layout flex
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

  // Tìm kiếm theo tên trong h3
  searchInput.addEventListener("keyup", function () {
    const keyword = this.value.toLowerCase();

    filteredCards = cards.filter(card => {
      const name = card.querySelector("h3").textContent.toLowerCase();
      return name.includes(keyword);
    });

    currentPage = 1;
    showPage(currentPage);
    renderPagination();
  });

  // Hiển thị ban đầu
  showPage(currentPage);
  renderPagination();
});
