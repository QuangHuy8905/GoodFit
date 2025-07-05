<?php
// Kết nối CSDL
include '../connect.php';

// Lấy dữ liệu từ form
$username = $_POST["username"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];

// Kiểm tra mật khẩu nhập lại
if ($password !== $repassword) {
    die("Mật khẩu không trùng khớp. <a href='Singup.html'>Quay lại</a>");
}

// Mã hóa mật khẩu
$hash = password_hash($password, PASSWORD_DEFAULT);

// Lưu vào CSDL
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hash);

if ($stmt->execute()) {
    echo "<script>
        alert('Đăng ký thành công!');
        window.location.href = '../LOGIN/Login.html';
    </script>";
} else {
    echo "<script>
        alert('Tài khoản đã tồn tại hoặc có lỗi!');
        window.location.href = 'Singup.html';
    </script>";
}


$stmt->close();
$conn->close();
?>
