<?php
include '../connect.php';

$sql = "SELECT * FROM sanpham";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700&family=IBM+Plex+Serif:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="cuahang.css">
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

    <div class="product-grid">

     <?php while ($row = $result->fetch_assoc()) { ?>
  <a href="../cuahang2/cuahang2.php?id=<?php echo $row['id']; ?>" class="card-link">
    <div class="product-card">
      <img src="<?php echo $row['anh']; ?>" alt="<?php echo $row['ten']; ?>"  />
      <h2><?php echo $row['ten']; ?></h2>
      <p class="price"><?php echo number_format($row['gia'], 0, ',', '.'); ?> VND</p>
    </div>
  </a>
<?php } ?>
     
    </div>
   <div class="pagination" id="pagination"></div>
  </section>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/GoodFit/footer.php"); ?>

<script src="cuahang.js"></script>

</body>
</html>