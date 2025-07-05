<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Thông Tin Giảng Viên</title>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700&family=IBM+Plex+Serif:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fav.css">
  <link rel="stylesheet" href="../header.css">
</head>
<body>
  <?php include '../header.php'; ?>

  <section class="trainer-section">
    <h1>VIDEO YEU THICH</h1>
    <p class="sub-text">Tất cả video, huấn luyện viên của bạn đều được lưu trữ tại đây – sẵn sàng để bạn xem lại bất cứ khi nào!</p>
    <div class="fav-container">
  <h2 style="text-align:center;">Danh sách yêu thích</h2>
  <div class="fav-list" id="fav-list"></div>
</div>
<div class="trainer-pagination" id="trainerPagination"></div>
<h2>Các Giảng Viên Được Theo Dõi</h2>
<div id="trainer-fav-container" style="display: flex; overflow-x: auto; gap: 20px;"></div>
</section>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/GoodFit/footer.php"); ?>
  <script src="fav.js"></script>

</body>