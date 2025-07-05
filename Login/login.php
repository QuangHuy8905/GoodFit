<?php
session_start();

// Kết nối CSDL
include '../connect.php';

// Lấy và làm sạch dữ liệu
$username = trim(mysqli_real_escape_string($conn, $_POST['username']));
$password = trim($_POST['password']);

// Truy vấn người dùng theo username
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    // So sánh mật khẩu nhập vào với mật khẩu đã hash
    if (password_verify($password, $row['password'])) {
        // Đăng nhập thành công
        $_SESSION['username'] = $username;
        header("Location: ../index.php");
        exit();
    } else {
        // Sai mật khẩu
        echo "<script>alert('Sai mật khẩu!'); window.location.href = 'Login.html';</script>";
    }
} else {
    // Không tìm thấy người dùng
    echo "<script>alert('Tài khoản không tồn tại!'); window.location.href = 'Login.html';</script>";
}
?>
