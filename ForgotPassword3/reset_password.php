<?php
session_start();
include '../connect.php';

$password = $_POST['password'];
$repassword = $_POST['repassword'];

if ($password !== $repassword) {
    echo "<script>alert('Mật khẩu không khớp!'); window.location.href='ForgotPassword3.html';</script>";
    exit();
}

$username = $_SESSION['reset_username'] ?? '';
if (!$username) {
    echo "<script>alert('Không xác định được người dùng!'); window.location.href='ForgotPassword1.html';</script>";
    exit();
}

// Mã hóa mật khẩu và cập nhật
$hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "UPDATE users SET password='$hash' WHERE username='$username'";

if (mysqli_query($conn, $sql)) {
    session_destroy();
    echo "<script>alert('Đặt lại mật khẩu thành công!'); window.location.href='../Login/Login.html';</script>";
} else {
    echo "Lỗi: " . mysqli_error($conn);
}
?>
