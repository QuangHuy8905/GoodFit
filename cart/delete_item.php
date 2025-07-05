<?php
$conn = new mysqli("localhost", "root", "123456", "goodfit");
if ($conn->connect_error) {
  die("Lỗi kết nối: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $id = (int)$_POST["id"];
  $conn->query("DELETE FROM cart_items WHERE id = $id");
}

header("Location: cart.php");
exit;
?>

