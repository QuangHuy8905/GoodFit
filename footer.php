<?php
if (session_status() === PHP_SESSION_NONE) session_start();
$username = $_SESSION['username'] ?? null;
?>

<footer class="footer">
  <div class="footer-top">
    <div class="footer-left">
      <img src="/GoodFit/img/logo.png" alt="GoodFit Logo" class="logo">
    </div>

    <nav class="footer-links">
      <a href="/GoodFit/index.php">Trang Chủ</a>
      <a href="/GoodFit/Video/Video.php">Video</a>
      <a href="/GoodFit/Giangvien/Giangvien.php">Huấn Luyện Viên</a>
      <a href="/GoodFit/cuahang/cuahang.php">Cửa Hàng</a>
      <a href="/GoodFit/about/about.php">Về GoodFit</a>
    </nav>

    <?php if ($username): ?>
      <div class="user-menu">
          <button class="user-button">HI! <?= htmlspecialchars($username); ?></button>
          <div class="user-dropdown">
              <a href="/GoodFit/logout.php"><img class="user-icon" src="/GoodFit/img/input.png"> ĐĂNG XUẤT</a>
          </div>
      </div>
    <?php else: ?>
      <a href="/GoodFit/login/Login.html" class="login-btn">Đăng nhập</a>
    <?php endif; ?>
  </div>

  <hr class="footer-divider" />

  <div class="footer-bottom">
    <div class="social-icons">
      <a href="#"><img src="/GoodFit/img/fb.png" alt="Facebook" class="social-icon-img"></a>
      <a href="#"><img src="/GoodFit/img/x.png" alt="X (Twitter)" class="social-icon-img"></a>
      <a href="#"><img src="/GoodFit/img/ig.png" alt="Instagram" class="social-icon-img"></a>
      <a href="#"><img src="/GoodFit/img/gg.png" alt="Google" class="social-icon-img"></a>
    </div>
    <p class="copyright">Copyright 2025 | All Rights Reserved</p>
  </div>
</footer>
