<?php
session_start();
include '../connect.php';

// Kiểm tra nếu không có id thì thoát
if (!isset($_GET['id'])) {
    echo "Không tìm thấy huấn luyện viên.";
    exit;
}

$id = intval($_GET['id']);  // Ép kiểu an toàn
$stmt = $conn->prepare("
  SELECT h.*, c.gioithieu, c.bangcap, c.noilamviec_chitiet, c.lienhe
  FROM huanluyenvien h
  LEFT JOIN chitiethlv c ON h.id = c.id_hlv
  WHERE h.id = ?
");

$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Không có huấn luyện viên phù hợp.";
    exit;
}

$hlv = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Thông Tin Huấn Luyện Viên</title>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&family=IBM+Plex+Serif:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="teacherinfo.css">
  <link rel="stylesheet" href="../header.css">
</head>
<body>
<?php include '../header.php'; ?>

<section class="trainer-section">
  <h5>HUẤN LUYỆN VIÊN</h5>
  <p class="sub-text">Tập luyện hiệu quả hơn khi bạn chọn đúng người dẫn dắt – người hiểu mục tiêu, truyền cảm hứng và đồng hành đúng nhịp với bạn.</p>
</section>

<div class="search-box">
      <svg class="icon search-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 103.5 10.5a7.5 7.5 0 0013.15 6.15z" />
      </svg>
      <input type="text" id="searchInput" placeholder="Tìm kiếm..." />
    </div>

<div class="container">
  <div class="info-box">
    <div class="section">
      <div class="section-title semibold-heading">Thông Tin</div>
      <div class="section-content">
        <?= nl2br(htmlspecialchars($hlv['gioithieu'])) ?>
      </div>
    </div>
    <div class="section">
      <div class="section-title semibold-heading">Bằng Cấp</div>
      <div class="section-content">
        <?= nl2br(htmlspecialchars($hlv['bangcap'])) ?>
      </div>
    </div>
    <div class="section">
      <div class="section-title semibold-heading">Nơi Làm Việc</div>
      <div class="section-content"><?= nl2br(htmlspecialchars($hlv['noilamviec_chitiet'])) ?>
</div>
    </div>
    <div class="section">
      <div class="section-title semibold-heading">Liên Hệ</div>
      <div class="section-content">
<?= nl2br(htmlspecialchars($hlv['lienhe'])) ?>
      </div>
    </div>
  </div>

  <div class="right-box">
    <h2><?= strtoupper($hlv['ten']) ?></h2>
    <img src="<?= htmlspecialchars($hlv['anh']) ?>" alt="<?= htmlspecialchars($hlv['ten']) ?>">
    <button
      class="follow-button"
      id="followButton"
      onclick="followTrainer(this)"
      data-name="<?= htmlspecialchars($hlv['ten']) ?>"
      data-img="<?= htmlspecialchars($hlv['anh']) ?>"
      data-desc='["<?= htmlspecialchars($hlv['chuyenmon']) ?>", "Level 1 Health and Fitness Assistant", "Level 2 Fitness Instructor"]'>
      THEO DÕI
    </button>
  </div>
</div>

<div class="image-gallery">
  <div class="gallery-item"><img src="img/image 11.png" alt="Ảnh 1"></div>
  <div class="gallery-item"><img src="img/image 11.png" alt="Ảnh 2"></div>
  <div class="gallery-item"><img src="img/image 11.png" alt="Ảnh 3"></div>
  <div class="gallery-item"><img src="img/image 11.png" alt="Ảnh 4"></div>
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
      Sau 1 tháng theo các bài hướng dẫn trên GoodFit, mình đã giảm được 4kg và cảm thấy khỏe khoắn hơn rất nhiều.
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

<div id="customAlert" class="custom-alert hidden">
  <div class="custom-alert-content">
    <p id="alertMessage">Thông báo</p>
    <button onclick="closeCustomAlert()">OK</button>
  </div>
</div>

</body>
</html>
