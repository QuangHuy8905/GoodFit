document.addEventListener('DOMContentLoaded', function() {
    // Hàm hiển thị/ẩn mật khẩu (giữ nguyên hoặc đặt ở đây nếu chưa có)
    function togglePassword() {
        const passwordField = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.setAttribute('name', 'eye-off-outline');
        } else {
            passwordField.type = 'password';
            eyeIcon.setAttribute('name', 'eye-outline');
        }
    }
    // Gán hàm togglePassword vào sự kiện click của icon (nếu bạn chưa làm)
    const togglePasswordBtn = document.querySelector('.toggle-password');
    if (togglePasswordBtn) {
        togglePasswordBtn.addEventListener('click', togglePassword);
    }


    // Lấy form đăng nhập
    const loginForm = document.querySelector('.login-box form'); 
    
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            // Ngăn chặn hành vi gửi form mặc định để chúng ta có thể điều hướng bằng JS
            event.preventDefault(); 
            
            // --- Ở đây là phần bạn sẽ xử lý logic đăng nhập thực tế ---
            // Ví dụ: Lấy giá trị username/email và password từ các input
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            console.log('Tên tài khoản/Email:', username);
            console.log('Mật khẩu:', password);
            
            // --- Sau khi xử lý logic đăng nhập (giả sử thành công) ---
            // Điều hướng đến trang chủ
            // (Bạn có thể thêm logic kiểm tra đăng nhập thành công/thất bại ở đây)
            
            // Ví dụ: Điều hướng sau 1 giây để mô phỏng quá trình xử lý
            setTimeout(() => {
                window.location.href = '../index.html'; // Điều hướng đến trang chủ
            }, 500); // Điều hướng sau 0.5 giây
        });
    }
});