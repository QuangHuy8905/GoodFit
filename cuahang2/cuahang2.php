<?php
include '../connect.php';

$id = $_GET['id'] ?? 0;
$stmt = $conn->prepare("SELECT * FROM sanpham WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

// ✅ Thêm đoạn này
$related_stmt = $conn->prepare("SELECT * FROM sanpham WHERE id != ? ORDER BY RAND() LIMIT 3");
$related_stmt->bind_param("i", $id);
$related_stmt->execute();
$related_result = $related_stmt->get_result();
?>

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
    </div>
    <div class="product-right">
    <div class="product-image" >
  <img src="<?php echo $product['anh']; ?>" alt="">
    </div>
<div class="product-content">
  <h2 class="product-title"><?php echo $product['ten']; ?></h2>
  <p class="product-price">Giá: <?php echo number_format($product['gia'], 0, ',', '.'); ?>đ</p>
</div>
<div class="product-buttons">
  <!-- Form Thêm Vào Giỏ Hàng -->
  <form method="POST" action="add_to_cart.php">
    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
    <button type="submit" class="outline-button">Thêm Vào Giỏ Hàng</button>
  </form>

  <!-- Thông báo khi đã thêm -->
<?php if (isset($_GET['added'])): ?>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      showCustomAlert("Đã thêm vào giỏ hàng!");
    });
  </script>
<?php endif; ?>


  <!-- Nút Mua Ngay -->
  <?php 
  if (session_status() === PHP_SESSION_NONE) {
      session_start();
  }

  if (isset($_SESSION['username'])): ?>
    <form method="POST" action="add_to_cart.php" onsubmit="window.location.href='../cart/cart.php'">
      <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
      <input type="hidden" name="redirect_to_cart" value="1">
      <button type="submit" class="cta-button">Mua Ngay</button>
    </form>
  <?php else: ?>
    <button class="cta-button" onclick="window.location.href='../login/Login.html'">Mua Ngay</button>
  <?php endif; ?>
</div>

 </div>
<div class="specs">
  <h2 class="specs-title">THÔNG TIN CHI TIẾT SẢN PHẨM</h2>
</div>
<p class="product-description">
  <?= nl2br(htmlspecialchars($product['mota'])) ?>
</p>
</section>
<section class="related-section">
  <h2 class="related-title">NHỮNG SẢN PHẨM LIÊN QUAN</h2>
<div class="related-list">
  <?php while ($item = $related_result->fetch_assoc()): ?>
    <div class="product-card related-card" onclick="window.location.href='cuahang2.php?id=<?= $item['id'] ?>'">
      <img src="<?= htmlspecialchars($item['anh']) ?>" alt="<?= htmlspecialchars($item['ten']) ?>" />
      <h2><?= htmlspecialchars($item['ten']) ?></h2>
      <p class="price"><?= number_format($item['gia'], 0, ',', '.') ?>đ</p>
    </div>
  <?php endwhile; ?>
</div>

</section>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/GoodFit/footer.php"); ?>

  

<script src="cuahang2.js"></script>

<div id="custom-alert" class="custom-alert hidden">
  <div class="custom-alert-content">
    <p>Đã thêm vào giỏ hàng!</p>
    <button onclick="closeCustomAlert()">OK</button>
  </div>
</div>
</body>
</html>