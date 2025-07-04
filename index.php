<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <title>GoodFit - Thể Thao Thế Hệ Mới</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php
session_start();
$username = $_SESSION['username'] ?? null;
?>
<body>
  <header class="navbar">
    <img src="img/logo.png" alt="GoodFit Logo" class="logo">
    <nav class="nav-links">
      <a href="index.html">Trang Chủ</a>
      <a href="Video/Video.html">Video</a>
      <a href="Giangvien/Giangvien.html">Huấn Luyện Viên</a>
      <a href="cuahang/cuahang.html">Cửa Hàng</a>
      <a href="about/about.html">Về GoodFit</a>
    </nav>
<?php if ($username): ?>
    <div class="user-menu">
      <div class="user-toggle">
        <span class="user-name">HI! QUANG HUY</span>
        <svg class="dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path d="M6 9l6 6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="dropdown-panel">

        <div class="dropdown-item">
          <div class="avatar"></div>
          <span>QUANG HUY</span>
        </div>

        <a href="../fav/fav.html" class="dropdown-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="#7B7F92" d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
          </svg>
          <span>YÊU THÍCH</span>
        </a>

        <a href="../setting/setting.html" class="dropdown-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="#7B7F92" d="M19.14,12.94a7.43,7.43,0,0,0,0-1.88l2.11-1.65a.5.5,0,0,0,.12-.63l-2-3.46a.5.5,0,0,0-.6-.22l-2.49,1a7.31,7.31,0,0,0-1.6-.94l-.38-2.65A.5.5,0,0,0,14,3H10a.5.5,0,0,0-.5.42L9.14,6.07a7.31,7.31,0,0,0-1.6.94l-2.49-1a.5.5,0,0,0-.6.22l-2,3.46a.5.5,0,0,0,.12.63L4.86,11.06a7.43,7.43,0,0,0,0,1.88L2.75,14.59a.5.5,0,0,0-.12.63l2,3.46a.5.5,0,0,0,.6.22l2.49-1a7.31,7.31,0,0,0,1.6.94l.38,2.65A.5.5,0,0,0,10,21h4a.5.5,0,0,0,.5-.42l.36-2.65a7.31,7.31,0,0,0,1.6-.94l2.49,1a.5.5,0,0,0,.6-.22l2-3.46a.5.5,0,0,0-.12-.63ZM12,15.5A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"/>
          </svg>
          <span>CÀI ĐẶT</span>
        </a>

        <a href="../cart/cart.html" class="dropdown-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="#7B7F92" d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2S15.9 22 17 22s2-.9 2-2-.9-2-2-2zM7.16 13h9.79c.75 0 1.41-.41 1.75-1.03L21.89 6.5c.18-.34.11-.76-.18-1.03-.3-.28-.72-.3-1.06-.09L17.9 7H6.21L4.27 4.41c-.26-.31-.69-.38-1.04-.17-.35.2-.49.63-.32.99L5.2 12c.34.61 1 .99 1.73.99h.23z"/>
          </svg>
          <span>GIỎ HÀNG</span>
        </a>

        <a href="../dang-xuat.html" class="dropdown-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="#7B7F92" d="M16 13v-2H7V8l-5 4 5 4v-3zM20 3h-8c-1.1 0-2 .9-2 2v4h2V5h8v14h-8v-4h-2v4c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>
          </svg>
          <span>ĐĂNG XUẤT</span>
        </a>

      </div>
    </div>
<?php else: ?>
    <a href="login/Login.html" class="login-btn">Đăng nhập</a>
<?php endif; ?>
  </header>


  <section class="hero">
    <div class="hero-content">
      <h1>THỂ THAO<br>THẾ HỆ MỚI</h1>
      <p>
        GoodFit là nền tảng hướng dẫn tập thể hình hiện đại, được tạo ra dành cho những người ưu tiên sự thoải mái và hiệu quả, mong muốn rèn luyện trong một môi trường chuyên nghiệp và thân thiện.
      </p>
      <a href="SignUp/Singup.html" class="register-btn">Đăng Kí Ngay</a>
    </div>
  </section>


  <section class="services">
  <h2 class="section-title">Các Dịch Vụ Của Chúng Tôi</h2>
  <p class="section-subtitle">
    Khám phá các giải pháp toàn diện giúp bạn nâng tầm sức khỏe và phong cách sống.
  </p>
  <div class="service-grid">
    
    <!-- Box 1: Tham gia -->
    <div class="service-box join-box">
      <h3>Tham Gia Cùng<br>GoodFit Ngay</h3>
      <p>Đừng bỏ lỡ cơ hội trải nghiệm hành trình rèn luyện sức khỏe hiệu quả cùng GoodFit ngay hôm nay.</p>
      <a href="#" class="btn-white">Bắt Đầu Ngay Hôm Nay</a>
    </div>

    <!-- Box 2: Video -->
    <div class="service-box">

<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <rect x="3" y="5" width="18" height="14" rx="3" ry="3" stroke-width="1"></rect>
  <polygon points="10.5 8.5 15.5 12 10.5 15.5 10.5 8.5" stroke-width="1"></polygon>
</svg>

      <h4>Video</h4>
      <p>Thư viện video khổng lồ bao gồm mọi loại hình fitness và yoga từ cơ bản đến nâng cao.</p>
      <a href="Video/Video.html" class="btn-outline">Tìm hiểu thêm</a>
    </div>

    <!-- Box 3: Huấn luyện viên -->
    <div class="service-box">
<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
</svg>

      <h4>Huấn Luyện Viên</h4>
      <p>Đội ngũ huấn luyện viên chuyên nghiệp mang đến những buổi tập chất lượng và hiệu quả nhất</p>
      <a href="Giangvien/Giangvien.html" class="btn-outline">Tìm hiểu thêm</a>
    </div>

    <!-- Box 4: Cửa hàng -->
    <div class="service-box">
<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 7M7 13l-2 6h12M10 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z" />
</svg>

      <h4>Cửa Hàng</h4>
      <p>Bộ sưu tập sản phẩm thể thao và phụ kiện chất lượng, giúp tối ưu hiệu quả luyện tập của bạn.</p>
      <a href="cuahang/cuahang.html" class="btn-outline">Tìm hiểu thêm</a>
    </div>

  </div>
</section>


<section class="video-section">
  <div class="video-header">
    <h2>Tìm Kiếm Video Bạn Yêu Thích</h2>
    <p>Tổng hợp đầy đủ video bạn cần, dễ dàng tìm bài tập phù hợp.</p>
    <div class="video-categories">
      <button class="category active">Fitness</button>
      <button class="category">Yoga</button>
      <button class="category">HIIT</button>
      <button class="category">Cardio</button>
      <button class="category">Gymnastics</button>
    </div>
  </div>


  <div class="video-content">
    <div class="video-image">
      <img src="img/video-yoga.jpg" alt="Yoga Video">
    </div>
    <div class="video-list">
      <div class="video-item">
        <h3>Fitness Cơ Bản</h3>
        <p>Bạn đang tìm kiếm điểm khởi đầu an toàn và hiệu quả để cải thiện thể lực? Fitness được thiết kế dành riêng cho những người chưa từng hoặc ít khi tập luyện. Chúng tôi sẽ hướng dẫn bạn từng động tác cơ bản một cách chi tiết, tập trung vào kỹ thuật đúng để tránh chấn thương và giúp bạn làm quen dần với cường độ. Bạn sẽ được làm quen với các bài tập khởi động, làm nóng cơ thể, các động tác squat, plank, chống đẩy biến thể và các bài tập giãn cơ cuối buổi. Mục tiêu là xây dựng nền tảng sức bền, tăng cường sức mạnh cốt lõi và làm quen với nhịp điệu tập luyện đều đặn, tạo tiền đề vững chắc cho các buổi tập nâng cao hơn sau này.</p>
      </div>
      <div class="video-item">
        <h3>Bài Tập Toàn Thân Hiệu Quả Tại Nhà</h3>
        <p>Chuỗi bài tập được thiết kế linh hoạt, kết hợp các động tác Compound (đa khớp) giúp tác động đồng thời nhiều nhóm cơ lớn, tối ưu hóa quá trình đốt cháy calo và tăng cường trao đổi chất. Từ burpees, lunges, mountain climbers cho đến các biến thể của plank và push-up, mỗi động tác đều được giải thích rõ ràng và có các lựa chọn điều chỉnh để phù hợp với mọi cấp độ thể lực. Hãy chuẩn bị tinh thần đổ mồ hôi và cảm nhận sự săn chắc của cơ thể sau mỗi buổi tập!</p>
      </div>
    </div>
  </div>
</section>


<section class="team-section">
  <div class="container">
    <h2 class="team-title">Gặp Gỡ Các Huấn Luyện Viên Chuyên Nghiệp</h2>
    <p class="team-subtitle">
      Đồng hành cùng đội ngũ huấn luyện viên hàng đầu – tận tâm, chuyên môn cao và luôn sẵn sàng hỗ trợ bạn trên hành trình tập luyện.
    </p>
    <div class="team-grid">
      <div class="row">
      <img src="img/coach1.png" alt="Coach 1">
      <img src="img/coach2.png" alt="Coach 2">
      <img src="img/coach3.png" alt="Coach 3">
      </div>
      <div class="row">
      <img src="img/coach4.png" alt="Coach 4">
      <img src="img/coach5.png" alt="Coach 5">
      <img src="img/coach6.png" alt="Coach 6">
      </div>
    </div>
    <div class="team-button">
      <button>Tìm Hiểu Thêm</button>
    </div>
  </div>
</section>



<section class="cta-section">
  <div class="cta-overlay">
    <h2>THAM GIA VÀO GOODFIT</h2>
    <p>
      Khám phá ngay thư viện video tập luyện được tổng hợp đầy đủ mọi thể loại – từ cơ bản đến nâng cao, từ yoga nhẹ nhàng đến cardio đốt cháy calo. Hành trình cải thiện sức khỏe, vóc dáng và tinh thần của bạn bắt đầu tại đây.
    </p>
    <a href="SignUp/Singup.html" class="cta-button">Đăng Ký Ngay Bây Giờ</a>
  </div>
</section>


<footer class="footer">
  <div class="footer-top">
    <div class="footer-left">
      <img src="img/logo.png" alt="GoodFit Logo" class="logo">
    </div>
    <nav class="footer-links">
      <a href="index.html">Trang Chủ</a>
      <a href="Video/Video.html">Video</a>
      <a href="Giangvien/Giangvien.html">Người Hướng Dẫn</a>
      <a href="cuahang/cuahang.html">Cửa Hàng</a>
      <a href="about/about.html">Về GoodFit</a>
    </nav>
    <?php if ($username): ?>
    <div class="user-menu">
        <button class="user-button">HI! <?php echo htmlspecialchars($username); ?></button>
                <div class="user-dropdown">
            <a href="logout.php"><img class="user-icon" src="input.png"> ĐĂNG XUẤT</a>
        </div>
    </div>
<?php else: ?>
    <a href="login/Login.html" class="login-btn">Đăng nhập</a>
<?php endif; ?>
  </div>

  <hr class="footer-divider" />

  <div class="footer-bottom">
    <div class="social-icons">
      <a href="#"><img src="img/fb.png" alt="Facebook" class="social-icon-img"></a>
      <a href="#"><img src="img/x.png" alt="X (Twitter)" class="social-icon-img"></a>
      <a href="#"><img src="img/ig.png" alt="Instagram" class="social-icon-img"></a>
      <a href="#"><img src="img/gg.png" alt="Google" class="social-icon-img"></a>
    </div>
    <p class="copyright">Copyright 2025 | All Rights Reserved</p>
  </div>
</footer>

<script src="script.js"></script>

</body>
</html>
