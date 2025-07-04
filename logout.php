<?php
session_start();
session_unset();     // Xoá tất cả các biến session
session_destroy();   // Hủy toàn bộ session

// Quay về trang đăng nhập
header("Location: index.php");
exit();