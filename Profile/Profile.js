
const icons = document.querySelectorAll(".icon");
const sections = document.querySelectorAll(".main-tab");

icons.forEach(icon => {
  icon.addEventListener("click", () => {
    const target = icon.getAttribute("data-target") + "-section";

    // Ẩn toàn bộ section
    sections.forEach(section => section.classList.remove("active"));
    icons.forEach(i => i.classList.remove("active"));

    // Hiện đúng section
    document.getElementById(target).classList.add("active");
    icon.classList.add("active");
  });
});






