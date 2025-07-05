<?php
session_start();

include '../connect.php';
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

if (isset($_POST['save'])) {
    $newUsername = trim($_POST['username']);
    $firstName = trim($_POST['first_name']);
    $lastName = trim($_POST['last_name']);

    if (isset($_SESSION['username'])) {
        $currentUsername = $_SESSION['username'];

        // Cập nhật username mới
        $sql = "UPDATE users SET username = ? WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $newUsername, $currentUsername);

        if ($stmt->execute()) {
            $_SESSION['username'] = $newUsername; // cập nhật session
            echo "<script>alert('Cập nhật tên người dùng thành công!');</script>";
        } else {
            echo "<script>alert('Lỗi khi cập nhật tên người dùng.');</script>";
        }
    } else {
        echo "<script>alert('Bạn cần đăng nhập để cập nhật thông tin.'); window.location.href = 'login/Login.html';</script>";
    }
}
// kiểm tra trùng
$check = $conn->prepare("SELECT id FROM users WHERE username = ?");
$check->bind_param("s", $newUsername);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "<script>alert('Tên người dùng đã tồn tại.');</script>";
} else {
    // thực hiện UPDATE như trên
}
?>


<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Thông Tin Giảng Viên</title>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700&family=IBM+Plex+Serif:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="setting.css">
  <link rel="stylesheet" href="../header.css">
</head>
<body>
  <?php include '../header.php'; ?>
  <section class="setting">
    <h1>CÀI ĐẶT THÔNG TIN</h1>
  </section>


<section class="edit-profile">
  <div class="avatar-box">
    <img src="img/sanpham2.jpg" alt="Ảnh đại diện">
  </div>
  <!-- form box nhập dữ liệu -->
  <form action="setting.php" method="POST" class="form-box">
    <div class="name-row">
  <input type="text" name="first_name" placeholder="Họ">
  <input type="text" name="last_name" placeholder="Tên">
  </div>
  <input class="username-box " type="text" name="username" placeholder="Tên Người Dùng">
  <button class="save-button" type="submit" name="save">Lưu Thông Tin Đã Chỉnh Sửa</button>
</form>

</section>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/GoodFit/footer.php"); ?>
  <script src="setting.js"></script>

</body>