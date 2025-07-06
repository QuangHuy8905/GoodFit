<?php
include '../connect.php';
session_start();

$sql = "SELECT * FROM videos";
$result = $conn->query($sql);
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
        <h1>VIDEO</h1>
        <p class="sub-text">Hôm nay bạn muốn gì? Một buổi tập gym bùng nổ với tạ nặng, một buổi cardio đầy năng lượng, hay một buổi giãn cơ nhẹ nhàng để phục hồi?</p>

    <div class="search-box">
      <svg class="icon search-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 103.5 10.5a7.5 7.5 0 0013.15 6.15z" />
      </svg>
      <input type="text" id="searchInput" placeholder="Tìm kiếm..." />
    </div>

  <div class="container">
    <?php if ($result && $result->num_rows > 0): ?>
      <?php while ($row = $result->fetch_assoc()): ?>
        <div class="card">
          <a href="<?= htmlspecialchars($row['video_url']) ?>">
            <img src="<?= htmlspecialchars($row['thumbnail']) ?>" alt="Thumbnail" class="card-image" />
            <div class="card-content">
              <p class="author"><?= htmlspecialchars($row['tacgia']) ?></p>
              <p class="title"><strong><?= htmlspecialchars($row['tieude']) ?></strong></p>
              <p class="meta"><?= htmlspecialchars(number_format($row['luotxem'])) ?> lượt xem | <?= date('d/m/Y', strtotime($row['thoigian'])) ?></p>
            </div>
          </a>
          <?php if (isset($_SESSION['username'])): ?>
            <button
              class="like-button"
              onclick="addToFavorites(this)"
              data-url="<?= htmlspecialchars($row['video_url']) ?>"
              data-img="<?= htmlspecialchars($row['thumbnail']) ?>"
              data-author="<?= htmlspecialchars($row['tacgia']) ?>"
              data-title="<?= htmlspecialchars($row['tieude']) ?>"
              data-meta="<?= htmlspecialchars(number_format($row['luotxem']) . ' lượt xem | ' . $row['thoigian']) ?>"
            >YÊU THÍCH</button>
          <?php else: ?>
            <button class="like-button" onclick="window.location.href='../login/Login.html'">YÊU THÍCH</button>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p>Chưa có video nào.</p>
    <?php endif; ?>
  </div>

 <div class="pagination" id="pagination"></div>
</section>
<script src="script.js"></script>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/GoodFit/footer.php"); ?>

<div id="custom-alert" class="custom-alert hidden">
  <div class="custom-alert-content">
    <p>Đã thêm vào yêu thích!</p>
    <button onclick="closeCustomAlert()">OK</button>
  </div>
</div>
</body>

</html>