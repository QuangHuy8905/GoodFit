<?php
$conn = new mysqli("localhost", "root", "123456", "goodfit");
if ($conn->connect_error) {
  die("Kết nối thất bại: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $product_id = $_POST['product_id'];

  // Đánh dấu sản phẩm đã thêm vào giỏ
  $stmt = $conn->prepare("UPDATE sanpham SET in_cart = 1 WHERE id = ?");
  $stmt->bind_param("i", $product_id);
  $stmt->execute();

  // Quay lại cuahang2.php với thông báo
  header("Location: cuahang2.php?id=$product_id&added=1");
  exit();
}
?>

