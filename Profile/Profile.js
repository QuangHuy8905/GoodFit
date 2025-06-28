const icons = document.querySelectorAll(".icon");
const sections = document.querySelectorAll(".main-tab");

// Đảm bảo phần profile luôn active và icon profile luôn được làm nổi bật khi không có các tab khác
sections.forEach(section => section.classList.remove("active"));
icons.forEach(i => i.classList.remove("active"));

document.getElementById("profile-section").classList.add("active");
document.querySelector('.sidebar .icon[data-target="profile"]').classList.add("active");