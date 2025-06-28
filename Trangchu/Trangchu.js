// Lắng nghe sự kiện DOMContentLoaded để đảm bảo HTML đã được tải đầy đủ
document.addEventListener('DOMContentLoaded', function() {
    // Lấy tham chiếu đến TẤT CẢ các nút "YÊU THÍCH" bằng class của nó
    const likeButtons = document.querySelectorAll('.like-button'); // Đã sửa từ getElementById

    // Lặp qua từng nút và thêm bộ lắng nghe sự kiện
    likeButtons.forEach(button => { // Sử dụng forEach để xử lý từng nút
        button.addEventListener('click', function() {
            // 'this' trong ngữ cảnh này sẽ tham chiếu đến nút được click
            if (this.classList.contains('liked-button')) {
                // Nếu đã theo dõi, chuyển về trạng thái ban đầu
                this.textContent = 'YÊU THÍCH';
                this.classList.remove('liked-button');
                this.classList.add('like-button');
            } else {
                // Nếu chưa theo dõi, chuyển sang trạng thái đã theo dõi
                this.textContent = 'ĐÃ LƯU VÀO YÊU THÍCH';
                this.classList.add('liked-button');
                this.classList.remove('like-button');
            }
        });
    });
});