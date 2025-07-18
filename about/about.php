<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700&family=IBM+Plex+Serif:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="../header.css">
</head>
<body>
  <?php include '../header.php'; ?>


<section class="intro-section">
  <div class="intro-text">
    <h1 class="intro-title">GOOFIT – TẬP LUYỆN HIỆU QUẢ,<br>ĐẠT CHUẨN CHUYÊN GIA.</h1>
    <p class="intro-description">
      Goofit là điểm đến lý tưởng cho hành trình fitness của bạn. Chúng tôi chuyên tổng hợp và tuyển chọn các video tập luyện đa dạng, cùng với các chương trình huấn luyện cá nhân hóa từ các huấn luyện viên hàng đầu. Với Goofit, việc tiếp cận kiến thức và bài tập chuẩn xác trở nên dễ dàng hơn bao giờ hết, giúp bạn đạt được mục tiêu sức khỏe và thể chất một cách hiệu quả nhất.
    </p>
  </div>
  <div class="intro-image">
    <img src="img/imga.png" alt="Giới thiệu Goofit">
  </div>
</section>


<section class="signup-section">
  <div class="signup-image">
    <img src="img/imga.png" alt="Yoga Image" />
  </div>
  <div class="signup-form">
    <h2 class="signup-title">ĐĂNG KÍ NGAY ĐỂ<br>NHẬN NHIỀU ƯU ĐÃI</h2>
    <form>
      <label for="name">Tên</label>
      <input type="text" id="name" name="name" required>

      <label for="phone">Số Điện Thoại</label>
      <input type="text" id="phone" name="phone" required>

      <button type="submit" class="cta-button">Đăng Kí Ngay Bây Giờ</button>
    </form>
  </div>
</section>


<section class="faq-section">
  <h2 class="faq-title">CÁC CÂU HỎI THƯỜNG GẶP (FAQS)</h2>

  <div class="faq-item">
    <div class="faq-question" onclick="toggleFAQ(this)">
      <span>Tôi có thể tìm thấy loại hình tập luyện nào trên Goofit?</span>
      <svg class="faq-icon" viewBox="0 0 24 24"><path d="M5 12h14" stroke="currentColor" stroke-width="2"/></svg>
    </div>
    <div class="faq-answer">
       Goofit cung cấp một thư viện rộng lớn các loại hình tập luyện, bao gồm gym, yoga, cardio, HIIT, pilates, zumba, các bài tập sức mạnh, sức bền và nhiều bộ môn chuyên biệt khác, phù hợp với mọi cấp độ và mục tiêu.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question" onclick="toggleFAQ(this)">
      <span>Ai là người tạo ra các video và chương trình huấn luyện trên Goofit?</span>
      <svg class="faq-icon" viewBox="0 0 24 24"><path d="M5 12h14" stroke="currentColor" stroke-width="2"/></svg>
    </div>
    <div class="faq-answer">
      Các video và chương trình huấn luyện trên Goofit được tạo ra bởi các huấn luyện viên chuyên nghiệp, chuyên gia fitness hàng đầu và các đối tác đáng tin cậy trong lĩnh vực thể thao và sức khỏe. Chúng tôi cam kết mang đến nội dung chất lượng và đáng tin cậy.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question" onclick="toggleFAQ(this)">
      <span>Tôi cần thiết bị gì để tập luyện theo Goofit?</span>
      <svg class="faq-icon" viewBox="0 0 24 24"><path d="M5 12h14" stroke="currentColor" stroke-width="2"/></svg>
    </div>
    <div class="faq-answer">
      Nhiều bài tập trên Goofit có thể thực hiện không cần thiết bị, chỉ với trọng lượng cơ thể. Tuy nhiên, cũng có những chương trình yêu cầu dụng cụ cơ bản như tạ nhỏ, dây kháng lực, thảm yoga. Thông tin về thiết bị cần thiết sẽ được nêu rõ trong mô tả của từng video hoặc chương trình.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question" onclick="toggleFAQ(this)">
      <span>Làm thế nào để tôi bắt đầu sử dụng Goofit?</span>
      <svg class="faq-icon" viewBox="0 0 24 24"><path d="M5 12h14" stroke="currentColor" stroke-width="2"/></svg>
    </div>
    <div class="faq-answer">
      Rất đơn giản! Bạn chỉ cần truy cập website của Goofit, duyệt qua các danh mục video và chương trình huấn luyện. Hãy tìm kiếm nội dung phù hợp với mục tiêu và sở thích của bạn để bắt đầu hành trình fitness ngay hôm nay.
    </div>
  </div>
</section>


<section class="contact-section">
  <h2 class="contact-title">LIÊN HỆ HỖ TRỢ</h2>

  <form class="contact-form">
    <input type="email" placeholder="Email" class="contact-input" required />
    <textarea placeholder="Tin Nhắn..." class="contact-textarea" required></textarea>
    <button type="submit" class="cta-button">Gửi Ngay Cho Goofit</button>
  </form>
</section>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/GoodFit/footer.php"); ?>

<script src="about.js"></script>

</body>
</html>