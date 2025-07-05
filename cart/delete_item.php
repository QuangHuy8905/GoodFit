<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'goodfit';

$conn = new mysqli($host, $user, $pass, $db, 3307);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    // Xoá trạng thái giỏ hàng (in_cart = 0) thay vì xoá dữ liệu
    $stmt = $conn->prepare("UPDATE sanpham SET in_cart = 0 WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Xóa sản phẩm khỏi giỏ hàng thành công'); window.location.href='cart.php';</script>";
    } else {
        echo "Lỗi khi xoá sản phẩm: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "<script>alert('Không tìm thấy sản phẩm'); window.location.href='cart.php';</script>";
}

$conn->close();
?>
