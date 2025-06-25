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