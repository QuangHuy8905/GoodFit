<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700&family=IBM+Plex+Serif:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="cuahang2.css">
  <link rel="stylesheet" href="../header.css">
</head>
<body>
  <?php include '../header.php'; ?>
  <section class="store">
    <h1 class="title">CỬA HÀNG</h1>
    <p class="subtitle">
      Trang bị đầy đủ để bắt đầu hành trình rèn luyện cùng GoodFit. Khám phá các sản phẩm chất lượng giúp bạn đạt được mục tiêu và duy trì kết quả dài lâu.
    </p>
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

    <div class="product-section">
  <div class="product-left">
    <img src="img/sanpham2.jpg" alt="Máy chạy bộ lớn" class="main-product-img">
    <div class="product-thumbnails">
      <img src="img/sanpham2.jpg" alt="Treadmill 1">
      <img src="img/sanpham2.jpg" alt="Treadmill 2">
      <img src="img/sanpham2.jpg" alt="Treadmill 3">
    </div>
  </div>
  <div class="product-right">
    <h2 class="product-title">Máy Chạy Bộ Dành Cho Phòng Gym<br>V9 Series Treadmill</h2>
    <p class="product-price">999.000 VND</p>
    <div class="product-buttons">
      <form method="POST" action="add_to_cart.php">
  <input type="hidden" name="product_name" value="Máy Chạy Bộ Dành Cho Phòng Gym V9 Series Treadmill">
  <input type="hidden" name="product_price" value="999000">
  <input type="hidden" name="product_image" value="img/sanpham2.jpg">
  <button type="submit" class="outline-button">Thêm Vào Giỏ Hàng</button>
</form>
      <button class="cta-button">Mua Ngay</button>
    </div>
  </div>
</div>


<div class="specs">
  <h2 class="specs-title">THÔNG TIN CHI TIẾT SẢN PHẨM</h2>
  <div class="specs-table">
    <div class="spec-row"><span class="spec-name">Tên sản phẩm</span><span class="spec-value">Máy chạy bộ V9 Series</span></div>
    <div class="spec-row"><span class="spec-name">Mã sản phẩm</span><span class="spec-value">SH-T8919</span></div>
    <div class="spec-row"><span class="spec-name">Kích thước (D × R × C)</span><span class="spec-value">2190 × 970 × 1600 mm / 86 × 38 × 63 in &nbsp;&nbsp;(màn hình 15.6" LED)</span></div>
    <div class="spec-row"><span class="spec-name">Hệ thống truyền động</span><span class="spec-value">Động cơ AC 6.0 HP, phản hồi động</span></div>
    <div class="spec-row"><span class="spec-name">Độ nghiêng</span><span class="spec-value">-3% đến 15%</span></div>
    <div class="spec-row"><span class="spec-name">Tốc độ</span><span class="spec-value">0.8–20 km/h / 0.5–12.4 mph</span></div>
    <div class="spec-row"><span class="spec-name">Tải trọng người dùng tối đa</span><span class="spec-value">180 kg / 397 lbs</span></div>
    <div class="spec-row"><span class="spec-name">Vùng chạy</span><span class="spec-value">580 × 1570 mm / 23 × 62 in</span></div>
    <div class="spec-row"><span class="spec-name">Đo nhịp tim</span><span class="spec-value gray">Cảm biến tay cầm, hoặc không dây</span></div>
    <div class="spec-row"><span class="spec-name">Trọng lượng tịnh</span><span class="spec-value">191 kg / 421 lbs</span></div>
    <div class="spec-row"><span class="spec-name">Trọng lượng tổng</span><span class="spec-value">243 kg / 536 lbs</span></div>
    <div class="spec-row"><span class="spec-name">Màn hình điều khiển</span><span class="spec-value">15.6" LED</span></div>
  </div>
</div>
</section>



<section class="related-section">
  <h2 class="related-title">NHỮNG SẢN PHẨM LIÊN QUAN</h2>
  <div class="related-list">
    <div class="product-card related-card">
      <img src="img/sanpham2.jpg" alt="Tạ đa năng" />
      <h2>Bộ Tạ Tay Kết Hợp Tạ Đẩy 20Kg Đa Năng</h2>
      <p class="price">999.000 VND</p>
    </div>
    <div class="product-card related-card">
      <img src="img/sanpham2.jpg" alt="Tạ đa năng" />
      <h2>Bộ Tạ Tay Kết Hợp Tạ Đẩy 20Kg Đa Năng</h2>
      <p class="price">999.000 VND</p>
    </div>
    <div class="product-card related-card">
      <img src="img/sanpham2.jpg" alt="Tạ đa năng" />
      <h2>Bộ Tạ Tay Kết Hợp Tạ Đẩy 20Kg Đa Năng</h2>
      <p class="price">999.000 VND</p>
    </div>
  </div>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/GoodFit/footer.php"); ?>

  

<script src="cuahang2.js"></script>

</body>
</html>