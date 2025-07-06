<?php
include '../connect.php';

$sql = "SELECT * FROM huanluyenvien";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoodFit</title>
  <link rel="stylesheet" href="Giangvien.css">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700&family=IBM+Plex+Serif:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../header.css">
</head>
<body>
  <?php include '../header.php'; ?>
  <!-- thanh tìm kiếm và tiêu đề -->
    <section class="trainer-section">
    <h1>HUẤN LUYỆN VIÊN</h1>
    <p class="sub-text">Tập luyện hiệu quả hơn khi bạn chọn đúng người dẫn dắt – người hiểu mục tiêu, truyền cảm hứng và đồng hành đúng nhịp với bạn.</p>
    
    <div class="search-box">
      <svg class="icon search-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 103.5 10.5a7.5 7.5 0 0013.15 6.15z" />
      </svg>
      <input type="text" id="searchInput" placeholder="Tìm kiếm..." />
    </div>

    <div class="trainer-list" id="trainerList">
      <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
          <div class="card">
            <a href="../teacherinfo/teacherinfo.php">
              <div class="card-image-wrapper">
                <img src="<?= htmlspecialchars($row['anh']) ?>" alt="HLV <?= htmlspecialchars($row['ten']) ?>">
              </div>
              <div class="card-info">
                <h3><?= strtoupper(htmlspecialchars($row['ten'])) ?></h3>
                <p>Giới Tính: <?= htmlspecialchars($row['gioitinh']) ?></p>
                <p>Nơi Làm Việc: <?= htmlspecialchars($row['noilamviec']) ?></p>
                <p>Chuyên Môn: <?= htmlspecialchars($row['chuyenmon']) ?></p>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p>Không tìm thấy huấn luyện viên nào.</p>
      <?php endif; ?>
    </div>
           <!-- thanh phân trang -->
    <div class="pagination" id="pagination"></div>
  </section>

  <script src="script.js"></script>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/GoodFit/footer.php"); ?>
</body>