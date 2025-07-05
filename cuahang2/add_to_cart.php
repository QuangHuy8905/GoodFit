<?php
$conn = new mysqli("localhost", "root", "123456", "goodfit");
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name  = isset($_POST["product_name"]) ? $_POST["product_name"] : "";
    $price = isset($_POST["product_price"]) ? (int)$_POST["product_price"] : 0;
    $image = isset($_POST["product_image"]) ? $_POST["product_image"] : "";

    if (!empty($name) && $price > 0) {
        $stmt = $conn->prepare("INSERT INTO cart_items (product_name, product_price, product_image) VALUES (?, ?, ?)");
        $stmt->bind_param("sis", $name, $price, $image);
        $stmt->execute();
        echo "<script>alert('Thêm vào giỏ hàng thành công!'); window.location.href='cuahang2.php';</script>";
        exit;
    } else {
        echo "<script>alert('Dữ liệu không hợp lệ.'); window.history.back();</script>";
        exit;
    }
}
?>
