<?php
if (session_status() == PHP_SESSION_NONE) session_start();
$username = $_SESSION['username'] ?? null;
?>

<header class="navbar">
  <img src="/GoodFit/img/logo.png" alt="GoodFit Logo" class="logo">
  <nav class="nav-links">
    <a href="/GoodFit/index.php">Trang Chủ</a>
    <a href="/GoodFit/Video/Video.php">Video</a>
    <a href="/GoodFit/Giangvien/Giangvien.php">Huấn Luyện Viên</a>
    <a href="/GoodFit/cuahang/cuahang.php">Cửa Hàng</a>
    <a href="/GoodFit/about/about.php">Về GoodFit</a>
  </nav>

  <?php if ($username): ?>
    <div class="user-menu">
      <button class="user-button">HI! <?= htmlspecialchars($username) ?></button>
      <div class="user-dropdown">
        <a href="#"><img class="user-icon" src="/GoodFit/img/Ellipse 51.png"> <?= htmlspecialchars($username) ?></a>
        <a href="#"><img class="user-icon" src="/GoodFit/img/Vector 15.png"> YÊU THÍCH</a>
        <a href="#"><img class="user-icon" src="/GoodFit/img/brightness_low.png"> CÀI ĐẶT</a>
        <a href="/GoodFit/cart/cart.php"><img class="user-icon" src="/GoodFit/img/local_mall.png"> GIỎ HÀNG</a>
        <a href="/GoodFit/logout.php"><img class="user-icon" src="/GoodFit/img/input.png"> ĐĂNG XUẤT</a>
      </div>
    </div>
  <?php else: ?>
    <a href="/GoodFit/login/Login.html" class="login-btn">Đăng nhập</a>
  <?php endif; ?>
</header>

