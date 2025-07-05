<?php
include '../connect.php';
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>alert('Bạn cần đăng nhập để thực hiện chức năng này.'); window.location.href='../login/Login.html';</script>";
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $product_id = $_POST['product_id'];

  // Đánh dấu sản phẩm đã thêm vào giỏ
  $stmt = $conn->prepare("UPDATE sanpham SET in_cart = 1 WHERE id = ?");
  $stmt->bind_param("i", $product_id);
  $stmt->execute();
if (isset($_POST['redirect_to_cart']) && $_POST['redirect_to_cart'] == 1) {
    header("Location: ../cart/cart.php");
    exit;
} else {
    header("Location: cuahang2.php?id=$product_id&added=1");
    exit();
}

}
?>

    