document.addEventListener("DOMContentLoaded", function () {
  const courseList = document.getElementById("trainerList"); // Chứa tất cả .course
  const searchInput = document.getElementById("searchInput");
  const pagination = document.getElementById("pagination");

  const allCourses = Array.from(courseList.getElementsByClassName("course"));
  let filteredCourses = [...allCourses];

  const itemsPerPage = 6; // Mỗi trang hiển thị 6 khóa học
  let currentPage = 1;

  function showPage(page) {
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;

    allCourses.forEach(course => course.style.display = "none");

    filteredCourses.forEach((course, index) => {
      if (index >= start && index < end) {
        course.style.display = "block"; // hoặc "flex" nếu bạn cần
      }
    });
  }

  function renderPagination() {
    pagination.innerHTML = "";
    const totalPages = Math.ceil(filteredCourses.length / itemsPerPage);
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

  // 🔍 Tìm kiếm theo tên khóa học trong thẻ <h3>
  searchInput.addEventListener("keyup", function () {
    const keyword = this.value.toLowerCase();

    filteredCourses = allCourses.filter(course => {
      const title = course.querySelector("h3").textContent.toLowerCase();
      return title.includes(keyword);
    });

    currentPage = 1;
    showPage(currentPage);
    renderPagination();
  });

  // Lần đầu hiển thị
  showPage(currentPage);
  renderPagination();
});
