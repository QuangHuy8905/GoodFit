<?php
session_start();
$conn = mysqli_connect("localhost", "root", "123456", "goodfit");

if (!$conn) {
    die("Kết nối thất bại");
}

$username = trim($_POST['username']);
$username = mysqli_real_escape_string($conn, $username);

// Kiểm tra có tồn tại tài khoản không
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Lưu username để dùng ở bước đặt lại mật khẩu
    $_SESSION['reset_username'] = $username;
    header("Location: ../ForgotPassword3/ForgotPassword3.html");
    exit();
} else {
    echo "<script>alert('Tên tài khoản không tồn tại!'); window.location.href='ForgotPassword1.html';</script>";
}
?>
