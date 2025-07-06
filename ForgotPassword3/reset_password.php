<?php
session_start();
include '../connect.php';

$password = $_POST['password'];
$repassword = $_POST['repassword'];

if ($password !== $repassword) {
    showCustomAlert('Mật khẩu không khớp!', 'ForgotPassword3.html');
    exit();
}

$username = $_SESSION['reset_username'] ?? '';
if (!$username) {
    showCustomAlert('Không xác định được người dùng!', 'ForgotPassword1.html');
    exit();
}

// Mã hóa mật khẩu và cập nhật
$hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "UPDATE users SET password='$hash' WHERE username='$username'";

if (mysqli_query($conn, $sql)) {
    session_destroy();
    showCustomAlert('Đặt lại mật khẩu thành công!', '../Login/Login.html');
} else {
    showCustomAlert('Có lỗi xảy ra khi cập nhật mật khẩu!', 'ForgotPassword3.html');
}


// Hàm hiển thị alert đẹp
function showCustomAlert($message, $redirect) {
    echo "
    <div class='custom-alert' id='customAlert'>
      <div class='custom-alert-content'>
        <p>$message</p>
        <button onclick='closeCustomAlert()'>OK</button>
      </div>
    </div>

    <script>
    function closeCustomAlert() {
      document.getElementById('customAlert').classList.add('hidden');
      window.location.href = '$redirect';
    }
    </script>

    <style>
      .custom-alert {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.6);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
      }

      .custom-alert-content {
        background-color: #ffffff;
        padding: 24px 32px;
        border-radius: 12px;
        text-align: center;
        font-family: 'IBM Plex Sans', sans-serif;
        box-shadow: 0 8px 24px rgba(0,0,0,0.2);
        animation: fadeIn 0.3s ease;
      }

      .custom-alert-content p {
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 20px;
        color: #2e2e2e;
      }

      .custom-alert-content button {
        padding: 10px 20px;
        background-color: #4D5F81;
        color: white;
        border: none;
        border-radius: 6px;
        font-weight: 500;
        cursor: pointer;
      }

      .custom-alert-content button:hover {
        background-color: #2c365e;
      }

      .hidden {
        display: none;
      }

      @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
      }
    </style>
    ";
}
?>
