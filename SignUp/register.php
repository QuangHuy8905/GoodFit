<?php
include '../connect.php';

$username = $_POST["username"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];

if ($password !== $repassword) {
    showCustomAlert('Mật khẩu không trùng khớp!', 'Signup.html');
    exit();
}

// Kiểm tra username đã tồn tại
$checkStmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
$checkStmt->bind_param("s", $username);
$checkStmt->execute();
$checkStmt->store_result();

if ($checkStmt->num_rows > 0) {
    $checkStmt->close();
    showCustomAlert('Tên tài khoản đã tồn tại!', 'Signup.html');
    exit();
}
$checkStmt->close();

// Hash mật khẩu
$hash = password_hash($password, PASSWORD_DEFAULT);

// Chèn vào database
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hash);

if ($stmt->execute()) {
    showCustomAlert('Đăng ký thành công!', '../LOGIN/Login.html');
} else {
    showCustomAlert('Có lỗi xảy ra khi đăng ký!', 'Signup.html');
}

$stmt->close();
$conn->close();


// Hàm tạo custom alert
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
