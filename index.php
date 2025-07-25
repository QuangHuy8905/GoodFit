<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <title>GoodFit - Thể Thao Thế Hệ Mới</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="header.css">
</head>
<body>

<?php include 'header.php'; ?>
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
      <a href="Login/login.html" class="btn-white">Bắt Đầu Ngay Hôm Nay</a>
    </div>

    <!-- Box 2: Video -->
    <div class="service-box">

<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <rect x="3" y="5" width="18" height="14" rx="3" ry="3" stroke-width="1"></rect>
  <polygon points="10.5 8.5 15.5 12 10.5 15.5 10.5 8.5" stroke-width="1"></polygon>
</svg>

      <h4>Video</h4>
      <p>Thư viện video khổng lồ bao gồm mọi loại hình fitness và yoga từ cơ bản đến nâng cao.</p>
      <a href="Video/Video.php" class="btn-outline">Tìm hiểu thêm</a>
    </div>

    <!-- Box 3: Huấn luyện viên -->
    <div class="service-box">
<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
</svg>

      <h4>Huấn Luyện Viên</h4>
      <p>Đội ngũ huấn luyện viên chuyên nghiệp mang đến những buổi tập chất lượng và hiệu quả nhất</p>
      <a href="Giangvien/Giangvien.php" class="btn-outline">Tìm hiểu thêm</a>
    </div>

    <!-- Box 4: Cửa hàng -->
    <div class="service-box">
<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 7M7 13l-2 6h12M10 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z" />
</svg>

      <h4>Cửa Hàng</h4>
      <p>Bộ sưu tập sản phẩm thể thao và phụ kiện chất lượng, giúp tối ưu hiệu quả luyện tập của bạn.</p>
      <a href="cuahang/cuahang.php" class="btn-outline">Tìm hiểu thêm</a>
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
  <a href="Giangvien/Giangvien.php" class="team-btn">Tìm Hiểu Thêm</a>
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
<?php include($_SERVER['DOCUMENT_ROOT'] . "/GoodFit/footer.php"); ?>
<script src="script.js"></script>

</body>
</html>
