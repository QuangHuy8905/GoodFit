<?php
session_start();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodFit</title>
    <link rel="stylesheet" href="Video.css">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700&family=IBM+Plex+Serif:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../header.css">
    </head>

<body>
  <?php include '../header.php'; ?>
<section class="trainer-section">
        <h1>VIDEO FITNESS</h1>
        <p class="sub-text">Hôm nay bạn muốn gì? Một buổi tập gym bùng nổ với tạ nặng, một buổi cardio đầy năng lượng, hay một buổi giãn cơ nhẹ nhàng để phục hồi?</p>

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
    
<div class="container">
  <div class="card">
    <a href="https://www.youtube.com/watch?v=REwT4IjE_eY&t=698s">
    <img src="img/video1.png" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">SHINPHAMM</p>
      <p class="title">
        <strong>10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM</strong>
      </p>
      <p class="meta">11 Tr lượt xem | 5 năm trước</p>
    </div>
    </a>
    <?php if (isset($_SESSION['username'])): ?>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=your-video-id-1"
    data-img="img/video1.png"
    data-author="SHINPHAMM"
    data-title="10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM"
    data-meta="11 Tr lượt xem | 5 năm trước"
  >YÊU THÍCH</button>
  <?php else: ?>
  <button class="like-button" onclick="window.location.href='../login/Login.html'">YÊU THÍCH</button>
<?php endif; ?>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=JUZ_6Yh9eUw">
    <img src="img/anh3.jpg" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">NGUYEN HIEU YOGA</p>
      <p class="title">
        <strong>Yoga cơ bản tại nhà - Bài 1: kéo dãn</strong>
      </p>
      <p class="meta">29 Tr lượt xem | 9 năm trước</p>
    </div>
    </a>
    <?php if (isset($_SESSION['username'])): ?>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=your-video-id-1"
    data-img="img/anh4.jpg"
    data-author="NGUYEN HIEU YOGA"
    data-title="Yoga cơ bản tại nhà - Bài 1: kéo dãn"
    data-meta="29 Tr lượt xem | 9 năm trước"
  >YÊU THÍCH</button>
  <?php else: ?>
  <button class="like-button" onclick="window.location.href='../login/Login.html'">YÊU THÍCH</button>
<?php endif; ?>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=eHnwaqhR11U">
    <img src="img/anh5.jpg" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">VIET THUY EROBIS</p>
      <p class="title">
        <strong>20 PHÚT AEROBIC GIẢM MỠ TOÀN THÂN, EO THON | CHO NGƯỜI MỚI TẠI NHÀ | DỄ TẬP HIỆU QUẢ NHẤT | BÀI 6</strong>
      </p>
      <p class="meta">19 Tr lượt xem | 4 năm trước</p>
    </div>
    </a>
    <?php if (isset($_SESSION['username'])): ?>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=eHnwaqhR11U"
    data-img="img/anh5.jpg"
    data-author="VIET THUY EROBIS"
    data-title="20 PHÚT AEROBIC GIẢM MỠ TOÀN THÂN, EO THON | CHO NGƯỜI MỚI TẠI NHÀ | DỄ TẬP HIỆU QUẢ NHẤT | BÀI 6"
    data-meta="19 Tr lượt xem | 4 năm trước"
  >YÊU THÍCH</button>
  <?php else: ?>
  <button class="like-button" onclick="window.location.href='../login/Login.html'">YÊU THÍCH</button>
<?php endif; ?>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=GyvdcXgzxCE">
    <img src="img/anh7.jpg" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">TUNG PHAO DUNG</p>
      <p class="title">
        <strong>15 Phút Cardio ĐỐT MỠ THỪA Toàn Thân NHANH NHẤT ✅ Bài Nặng Cho Tạng Người Khó Giảm Cân Chững Cân</strong>
      </p>
      <p class="meta">3,1 Tr lượt xem | 3 năm trước</p>
    </div>
    </a>
    <?php if (isset($_SESSION['username'])): ?>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=GyvdcXgzxCE"
    data-img="img/anh7.jpg"
    data-author="TUNG PHAO DUNG"
    data-title="15 Phút Cardio ĐỐT MỠ THỪA Toàn Thân NHANH NHẤT ✅ Bài Nặng Cho Tạng Người Khó Giảm Cân Chững Cân"
    data-meta="3,1 Tr lượt xem | 3 năm trước"
  >YÊU THÍCH</button>
  <?php else: ?>
  <button class="like-button" onclick="window.location.href='../login/Login.html'">YÊU THÍCH</button>
<?php endif; ?>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=muDIuysxOxU">
    <img src="img/anh8.png" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">GYM CHANGE 72</p>
      <p class="title">
        <strong>10 Minutes of Visual Power & Beats – 6-Pack Energy</strong>
      </p>
      <p class="meta">77  lượt xem | 13 ngày trước</p>
    </div>
    </a>
    <?php if (isset($_SESSION['username'])): ?>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=muDIuysxOxU"
    data-img="img/anh8.png"
    data-author="GYM CHANGE 72"
    data-title="10 Minutes of Visual Power & Beats – 6-Pack Energy"
    data-meta="77  lượt xem | 13 ngày trước"
  >YÊU THÍCH</button>
  <?php else: ?>
  <button class="like-button" onclick="window.location.href='../login/Login.html'">YÊU THÍCH</button>
<?php endif; ?>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=qiPWEgO-bJc">
    <img src="img/anh9.jpg" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">SCULPTZONE</p>
      <p class="title">
        <strong>20 MIN HIIT TABATA | TABATA HIIT Workout Full Body | Burn 400 Calories (No Equipment)</strong>
      </p>
      <p class="meta">537 N lượt xem | 4 tháng trước</p>
    </div>
    </a>
    <?php if (isset($_SESSION['username'])): ?>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=qiPWEgO-bJc"
    data-img="img/anh9.jpg"
    data-author="SCULPTZONE"
    data-title="20 MIN HIIT TABATA | TABATA HIIT Workout Full Body | Burn 400 Calories (No Equipment)"
    data-meta="537 N lượt xem | 4 tháng trước"
  >YÊU THÍCH</button>
  <?php else: ?>
  <button class="like-button" onclick="window.location.href='../login/Login.html'">YÊU THÍCH</button>
<?php endif; ?>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=riS89biXH7E">
    <img src="img/anh10.jpg" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">EMI WONG</p>
      <p class="title">
        <strong>FIX & SLIM YOUR BACK + BETTER POSTURE in 10 minutes ~ Emi</strong>
      </p>
      <p class="meta">28 Tr lượt xem | 2 năm trước</p>
    </div>
    </a>
    <?php if (isset($_SESSION['username'])): ?>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=riS89biXH7E"
    data-img="img/anh10.jpg"
    data-author="EMI WONG"
    data-title="FIX & SLIM YOUR BACK + BETTER POSTURE in 10 minutes ~ Emi"
    data-meta="28 Tr lượt xem | 2 năm trước"
  >YÊU THÍCH</button>
  <?php else: ?>
  <button class="like-button" onclick="window.location.href='../login/Login.html'">YÊU THÍCH</button>
<?php endif; ?>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=RkvZpXcF-jo">
    <img src="img/anh11.jpg" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">GYMDAYROI</p>
      <p class="title">
        <strong>8 Phút Tập Luyện GIẢM MỠ BẮP TAY Sau 30 Ngày Cho Người Mới Bắt Đầu</strong>
      </p>
      <p class="meta">7.9 Tr lượt xem | 5 năm trước</p>
    </div>
    </a>
    <?php if (isset($_SESSION['username'])): ?>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=RkvZpXcF-jo"
    data-img="img/anh11.jpg"
    data-author="GYMDAYROI"
    data-title="8 Phút Tập Luyện GIẢM MỠ BẮP TAY Sau 30 Ngày Cho Người Mới Bắt Đầu"
    data-meta="7.9 Tr lượt xem | 5 năm trước"
  >YÊU THÍCH</button>
    <?php else: ?>
  <button class="like-button" onclick="window.location.href='../login/Login.html'">YÊU THÍCH</button>
<?php endif; ?>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=QjC-LvggQAw">
    <img src="img/anh12.jpg" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">QUYEN NGUYEN</p>
      <p class="title">
        <strong>XOAY HÈ KHÁC LẠ, HƯỚNG DẪN CHẬM #aerobic #zumba #dance QUYÊN NGUYỄN</strong>
      </p>
      <p class="meta">46 N lượt xem | 5 năm trước</p>
    </div>
    </a>
    <?php if (isset($_SESSION['username'])): ?>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=QjC-LvggQAw"
    data-img="img/anh12.jpg"
    data-author="QUYEN NGUYEN"
    data-title="XOAY HÈ KHÁC LẠ, HƯỚNG DẪN CHẬM #aerobic #zumba #dance QUYÊN NGUYỄN"
    data-meta="46 N lượt xem | 5 năm trước"
  >YÊU THÍCH</button>
    <?php else: ?>
  <button class="like-button" onclick="window.location.href='../login/Login.html'">YÊU THÍCH</button>
<?php endif; ?>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=v9PDbF-Av2g">
    <img src="img/anh13.jpg" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">KOCHAN-THU HON</p>
      <p class="title">
        <strong>30p tổng hợp Tái Sinh,bài số 52</strong>
      </p>
      <p class="meta">114 N lượt xem | 2 tháng trước</p>
    </div>
    </a>
    <?php if (isset($_SESSION['username'])): ?>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=v9PDbF-Av2g"
    data-img="img/anh13.jpg"
    data-author="KOCHAN-THU HON"
    data-title="30p tổng hợp Tái Sinh,bài số 52"
    data-meta="114 N lượt xem | 2 tháng trước"
  >YÊU THÍCH</button>
      <?php else: ?>
  <button class="like-button" onclick="window.location.href='../login/Login.html'">YÊU THÍCH</button>
<?php endif; ?>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=wIynl3at0Rs">
    <img src="img/anh14.jpg" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">MILESTON</p>
      <p class="title">
        <strong>20 PHÚT TẬP LUYỆN TOÀN THÂN (KHÔNG CÓ THIẾT BỊ)</strong>
      </p>
      <p class="meta">3,5 Tr lượt xem | 4 năm trước</p>
    </div>
    </a>
        <?php if (isset($_SESSION['username'])): ?>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=your-video-id-1"
    data-img="img/anh14.jpg"
    data-author="MILESTON"
    data-title="20 PHÚT TẬP LUYỆN TOÀN THÂN (KHÔNG CÓ THIẾT BỊ)"
    data-meta="3,5 Tr lượt xem | 4 năm trước"
  >YÊU THÍCH</button>
      <?php else: ?>
  <button class="like-button" onclick="window.location.href='../login/Login.html'">YÊU THÍCH</button>
<?php endif; ?>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=Yu20j5jGHTc">
    <img src="img/anh15.jpg" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author"> x DATIFFN</p>
      <p class="title">
        <strong>20 Minute Full Body Workout (No Equipment)</strong>
      </p>
      <p class="meta">3,1 Tr lượt xem | 2 năm trước</p>
    </div>
    </a>
        <?php if (isset($_SESSION['username'])): ?>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=Yu20j5jGHTc"
    data-img="img/anh15.jpg"
    data-author="x DATIFFN"
    data-title="20 Minute Full Body Workout (No Equipment)"
    data-meta="3,1 Tr lượt xem | 2 năm trước"
  >YÊU THÍCH</button>
        <?php else: ?>
  <button class="like-button" onclick="window.location.href='../login/Login.html'">YÊU THÍCH</button>
<?php endif; ?>
  </div>


  
</div>
 <div class="pagination" id="pagination"></div>
</section>
<script src="script.js"></script>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/GoodFit/footer.php"); ?>
</body>

</html>