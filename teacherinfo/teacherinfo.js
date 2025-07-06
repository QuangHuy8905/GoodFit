// Lắng nghe sự kiện DOMContentLoaded để đảm bảo HTML đã được tải đầy đủ
document.addEventListener('DOMContentLoaded', function() {
  // Lấy tham chiếu đến nút "THEO DÕI" bằng ID của nó

    // --- BẮT ĐẦU CODE MỚI CHO ACTIVE MENU ---

  // Lấy tất cả các liên kết trong menu chính
  const navLinks = document.querySelectorAll('.main-nav ul li a');

  // Lấy đường dẫn URL hiện tại của trang
  const currentPath = window.location.pathname; // Ví dụ: /giangvien.html

  // Lặp qua từng liên kết
  navLinks.forEach(link => {
    // Lấy đường dẫn của liên kết (ví dụ: video.html)
    const linkPath = link.getAttribute('href');

    // Kiểm tra nếu đường dẫn hiện tại kết thúc bằng đường dẫn của liên kết
    // Điều này hữu ích nếu bạn có cấu trúc thư mục phức tạp hơn,
    // hoặc URL có thể là root (/) và link là index.html
    if (currentPath.endsWith(linkPath) || (currentPath === '/' && linkPath === 'index.html')) {
      // Xóa class 'active' khỏi tất cả các liên kết trước khi thêm vào cái mới
      // Điều này đảm bảo chỉ có một mục được active tại một thời điểm
      navLinks.forEach(l => l.classList.remove('active'));

      // Thêm class 'active' vào liên kết hiện tại
      link.classList.add('active');
    }
  });

  // --- KẾT THÚC CODE MỚI CHO ACTIVE MENU ---
});
/* lệnh theo dõi thì chuyển qua yêu thích và nếu không đăng nhập thì phải đăng nhập */
// Lệnh theo dõi giảng viên
function followTrainer(button) {
  if (!isLoggedIn) {
    showCustomAlert("Vui lòng đăng nhập để theo dõi giảng viên.");
    setTimeout(() => window.location.href = "../login/Login.html", 1500);
    return;
  }

  const name = button.dataset.name;
  const img = button.dataset.img;
  const desc = JSON.parse(button.dataset.desc);
  const id = button.dataset.id; // 🔴 Đây là nơi lấy ID

  const trainer = { name, img, desc, id };

  let followed = JSON.parse(localStorage.getItem("followedTrainers")) || [];

  const exists = followed.some(t => t.name === name);
  if (!exists) {
    followed.push(trainer);
    localStorage.setItem("followedTrainers", JSON.stringify(followed));
    button.textContent = "ĐÃ THEO DÕI";
    button.classList.remove("follow-button");
    button.classList.add("followed-button");
    showCustomAlert("Đã theo dõi giảng viên!");
  } else {
    showCustomAlert("Bạn đã theo dõi giảng viên này.");
  }
}

document.getElementById("submitComment").addEventListener("click", function () {
  const comment = document.getElementById("commentInput").value.trim();

  if (comment === "") {
    showCustomAlert("Vui lòng nhập đánh giá trước khi gửi.");
  } else {
    showCustomAlert("Cảm ơn bạn đã đánh giá huấn luyện viên!");
    document.getElementById("commentInput").value = "";
  }
});


  function showCustomAlert(message) {
    document.getElementById("alertMessage").textContent = message;
    document.getElementById("customAlert").classList.remove("hidden");
  }

  function closeCustomAlert() {
    document.getElementById("customAlert").classList.add("hidden");
  }

