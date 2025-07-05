<?php
$conn = new mysqli("localhost", "root", "123456", "goodfit");
if ($conn->connect_error) {
  die("Kết nối thất bại: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM cart_items");
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Giỏ Hàng</title>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700&family=IBM+Plex+Serif:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="cart.css">
  <link rel="stylesheet" href="../header.css">
  <style>
    .price-number {
      display: none;
    }
  </style>
</head>
<body>
  <?php include '../header.php'; ?>


  <section class="cart-container">
    <h1>GIỎ HÀNG</h1>
    <div class="search-box">
      <input type="text" id="searchInput" placeholder="Tìm kiếm...">
    </div>

    <?php while ($row = $result->fetch_assoc()): ?>
    <div class="cart-item">
      <div class="cart-left">
        <div class="cart-checkbox">
          <label class="custom-checkbox">
            <input type="checkbox" class="item-checkbox" data-price="<?= $row['product_price'] ?>" checked />
            <span class="checkmark"></span>
          </label>
        </div>

        <div class="image-box">
          <img src="img/sanpham2.jpg" alt="Sản phẩm">
        </div>

        <div class="cart-info">
          <h4><?= htmlspecialchars($row['product_name']) ?></h4>
          <div class="price"><?= number_format($row['product_price'], 0, ',', '.') ?> VND</div>
          <span class="price-number"><?= $row['product_price'] ?></span>
        </div>
      </div>

      <form method="POST" action="delete_item.php">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <button type="submit" class="cart-delete" aria-label="Xoá">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#4D5F81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 6h18" />
            <path d="M8 6V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1" />
            <path d="M19 6l-1.5 12a2 2 0 0 1-2 2H8.5a2 2 0 0 1-2-2L5 6" />
            <line x1="10" y1="11" x2="10" y2="17" />
            <line x1="14" y1="11" x2="14" y2="17" />
          </svg>
        </button>
      </form>
    </div>
    <?php endwhile; ?>
  </section>

  <section class="cart-summary">
    <div class="summary-text">
      <span class="label">Tổng cộng:</span>
      <span class="total-price" id="total-price">0 VND</span>
    </div>
    <!-- Nút Mua Hàng -->
<div style="text-align: center; margin-top: 20px;">
  <button id="btnMuaHang" class="muahang">Mua Hàng</button>
</div>

<!-- Form nhập thông tin -->
<div id="formThongTin" style="display: none; margin-top: 30px; background: #f4f4f4; padding: 30px; border-radius: 10px; width: 70%; margin-left: auto; margin-right: auto;">
  <h2 style="text-align: center; color: #3d5072;">ĐỊA CHỈ NHẬN HÀNG</h2>
  <div style="display: flex; gap: 20px; margin-bottom: 20px;">
    <input type="text" placeholder="Họ Tên" id="hoTen" style="flex: 1; padding: 15px; border: 2px solid #3d5072; border-radius: 8px;">
    <input type="text" placeholder="Số Điện Thoại" id="soDienThoai" style="flex: 1; padding: 15px; border: 2px solid #3d5072; border-radius: 8px;">
  </div>
  <div style="margin-bottom: 20px;">
    <input type="text" placeholder="Địa Chỉ" id="diaChi" style="width: 100%; padding: 15px; border: 2px solid #3d5072; border-radius: 8px;">
  </div>
  <div style="text-align: center;">
    <button id="btnXacNhan" style="padding: 10px 30px; font-size: 16px; background-color: #3d5072; color: white; border: none; border-radius: 6px;">Xác Nhận</button>
  </div>
</div>

  </section>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/GoodFit/footer.php"); ?>

  <script>
    function updateTotal() {
      let checkboxes = document.querySelectorAll(".item-checkbox");
      let total = 0;
      checkboxes.forEach(cb => {
        if (cb.checked) {
          total += parseInt(cb.dataset.price);
        }
      });
      document.getElementById("total-price").textContent = total.toLocaleString("vi-VN") + " VND";
    }

    document.querySelectorAll(".item-checkbox").forEach(cb => {
      cb.addEventListener("change", updateTotal);
    });

    window.addEventListener("load", updateTotal);
    document.getElementById("btnMuaHang").addEventListener("click", function () {
    document.getElementById("formThongTin").style.display = "block";
  });

  document.getElementById("btnXacNhan").addEventListener("click", function () {
    const hoTen = document.getElementById("hoTen").value.trim();
    const soDienThoai = document.getElementById("soDienThoai").value.trim();
    const diaChi = document.getElementById("diaChi").value.trim();

    if (!hoTen || !soDienThoai || !diaChi) {
      alert("Vui lòng điền đầy đủ thông tin!");
      return;
    }

    // Thông báo thành công
    alert("✅ Đặt hàng thành công! Cảm ơn bạn đã mua sắm tại GoodFit!");
    document.getElementById("formThongTin").style.display = "none";
  });
  </script>
</body>
</html>
