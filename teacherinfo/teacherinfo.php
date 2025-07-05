<?php
session_start();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Thông Tin Giảng Viên</title>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700&family=IBM+Plex+Serif:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="teacherinfo.css">
  <link rel="stylesheet" href="../header.css">
</head>
<body>
<?php include '../header.php'; ?>
    <section class="trainer-section">
    <h5>HUẤN LUYỆN VIÊN</h5>
    <p class="sub-text">Tập luyện hiệu quả hơn khi bạn chọn đúng người dẫn dắt – người hiểu mục tiêu, truyền cảm hứng và đồng hành đúng nhịp với bạn.</p>
    
    <div class="search-box">
      <svg class="icon search-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 103.5 10.5a7.5 7.5 0 0013.15 6.15z" />
      </svg>
      <input type="text" id="searchInput" placeholder="Tìm kiếm..." />
      <svg xmlns="http://www.w3.org/2000/svg" class="icon filter-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
        d="M4 6h16M4 12h8m-8 6h16M10 6v4M16 12v4M8 18v-2" />
      </svg>
    </div>
    </section>



  <div class="container">
    <div class="info-box">
      <div class="section">
        <div class="section-title semibold-heading">Thông Tin</div>
        <div class="section-content">
          Tôi là Đinh Quang Huy, huấn luyện viên thể hình với kinh nghiệm và đam mê đồng hành cùng học viên trên hành trình thay đổi vóc dáng và nâng cao sức khỏe.
        </div>
      </div>
      <div class="section">
        <div class="section-title semibold-heading">Bằng Cấp</div>
        <div class="section-content">
          HLV Thể hình – Fitness Sơ Cấp<br>
          Level 1 Health and Fitness Assistant<br>
          Level 2 Fitness Instructor
        </div>
      </div>
      <div class="section">
        <div class="section-title semibold-heading">Địa Chỉ</div>
        <div class="section-content">
          CN1: Small Gym - 49 Lê Đức Thọ, Gò Vấp, TP.HCM<br>
          CN2: PerfectFit - 233 Quang Trung, Quận 2, TP.HCM<br>
          CN3: H2 GYM - 123 Văn Cừ,  Quận 5, TP.HCM
        </div>
      </div>
      <div class="section">
        <div class="section-title semibold-heading">Liên Hệ</div>
        <div class="section-content">
          Facebook: https://www.facebook.com/hoangminh<br>
          Twitter: https://twitter.com/nguyenvana<br>
          Instagram: https://instagram.com/demo_user
        </div>
      </div>
    </div>
    <div class="right-box">
      <h2>ĐINH QUANG HUY</h2>
      <img src="img/anh.png" alt="Huấn luyện viên"> 
      <!-- nút theo dõi và lấy dữ liệu sang trang yêu thích -->
<button 
  class="follow-button"
  id="followButton"
  onclick="followTrainer(this)"
  data-name="ĐINH QUANG HUY"
  data-img="img/anh.png"    
  data-desc='["HLV Thể hình – Fitness Sơ Cấp", "Level 1 Health and Fitness Assistant", "Level 2 Fitness Instructor"]'>
  THEO DÕI
</button>
    </div>
  </div>
    <div class="image-gallery">
    <div class="gallery-item">
      <img src="img/image 11.png" alt="Ảnh nổi bật 1">
    </div>
    <div class="gallery-item">
      <img src="img/image 11.png" alt="Ảnh nổi bật 2">
    </div>
    <div class="gallery-item">
      <img src="img/image 11.png" alt="Ảnh nổi bật 3">
    </div>
    <div class="gallery-item">
      <img src="img/image 11.png" alt="Ảnh nổi bật 4">
    </div>
  </div>

    <div class="search-box">
      <input type="text" id="commentInput" placeholder="Đánh giá trải nghiệm của bạn với huấn luyện viên này..." />
    </div>
    <div style="text-align: center; margin-top: 10px;">
  <button id="submitComment" class="comment-button">GỬI</button>
</div>

   <div class="customer-reviews-container">
    <div class="review-card">

      <div class="reviewer-name">BẢO TRÂN</div>
      <div class="review-content">
        Sau 1 tháng theo các bài hướng dẫn trên GoodFit, mình đã giảm được 4kg và cảm thấy khỏe khoắn hơn rất nhiều. Cảm ơn đội ngũ GoodFit!
      </div>
    </div>
    <div class="review-card">
    
      <div class="reviewer-name">BÉ MAI</div>
      <div class="review-content">
        Giao diện thân thiện, dễ hiểu kể cả với người nhỏ tuổi như mình. GoodFit thực sự là người bạn đồng hành trong việc giữ gìn sức khỏe.
      </div>
    </div>
    <div class="review-card">
    
      <div class="reviewer-name">MINH CHỀ</div>
      <div class="review-content">
        Bài tập HIIT trên GoodFit thực sự thử thách nhưng rất hiệu quả. Mình đã giới thiệu cho cả nhóm bạn cùng tập, ai cũng mê!
      </div>
    </div>
  </div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/GoodFit/footer.php"); ?>
  <script>
  const isLoggedIn = <?= isset($_SESSION['username']) ? 'true' : 'false' ?>;
</script>
  <script src="teacherinfo.js"></script>
</body>
</html>

