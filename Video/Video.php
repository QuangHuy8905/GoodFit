<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodFit</title>
    <link rel="stylesheet" href="Video.css">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700&family=IBM+Plex+Serif:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../header.css">
    </head>

<body>
  <?php include '../header.php'; ?>
<section class="trainer-section">
        <h1>VIDEO FITNESS</h1>
        <p class="sub-text">Hôm nay bạn muốn gì? Một buổi tập gym bùng nổ với tạ nặng, một buổi cardio đầy năng lượng, hay một buổi giãn cơ nhẹ nhàng để phục hồi?</p>

    <div class="search-box">
      <svg class="icon search-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 103.5 10.5a7.5 7.5 0 0013.15 6.15z" />
      </svg>
      <input type="text" id="searchInput" placeholder="Tìm kiếm..." />
      <svg xmlns="http://www.w3.org/2000/svg" class="icon filter-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
        d="M4 6h16M4 12h8m-8 6h16M10 6v4M16 12v4M8 18v-2" />
      </svg>
    </div>
    
<div class="container">
  <div class="card">
    <a href="https://www.youtube.com/watch?v=REwT4IjE_eY&t=698s">
    <img src="img/video1.png" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">SHINPHAMM</p>
      <p class="title">
        <strong>10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM</strong>
      </p>
      <p class="meta">11 Tr lượt xem | 5 năm trước</p>
    </div>
    </a>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=your-video-id-1"
    data-img="img/video1.png"
    data-author="SHINPHAMM"
    data-title="10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM"
    data-meta="11 Tr lượt xem | 5 năm trước"
  >YÊU THÍCH</button>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=JUZ_6Yh9eUw">
    <img src="img/video1.png" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">NGUYEN HIEU YOGA</p>
      <p class="title">
        <strong>Yoga cơ bản tại nhà - Bài 1: kéo dãn</strong>
      </p>
      <p class="meta">29 Tr lượt xem | 9 năm trước</p>
    </div>
    </a>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=your-video-id-1"
    data-img="img/video1.png"
    data-author="NGUYEN HIEU YOGA"
    data-title="Yoga cơ bản tại nhà - Bài 1: kéo dãn"
    data-meta="29 Tr lượt xem | 9 năm trước"
  >YÊU THÍCH</button>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=REwT4IjE_eY&t=698s">
    <img src="img/video1.png" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">SHINPHAMM</p>
      <p class="title">
        <strong>10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM</strong>
      </p>
      <p class="meta">11 Tr lượt xem | 5 năm trước</p>
    </div>
    </a>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=your-video-id-1"
    data-img="img/video1.png"
    data-author="SHINPHAMM"
    data-title="10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM"
    data-meta="11 Tr lượt xem | 5 năm trước"
  >YÊU THÍCH</button>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=REwT4IjE_eY&t=698s">
    <img src="img/video1.png" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">SHINPHAMM</p>
      <p class="title">
        <strong>10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM</strong>
      </p>
      <p class="meta">11 Tr lượt xem | 5 năm trước</p>
    </div>
    </a>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=your-video-id-1"
    data-img="img/video1.png"
    data-author="SHINPHAMM"
    data-title="10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM"
    data-meta="11 Tr lượt xem | 5 năm trước"
  >YÊU THÍCH</button>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=REwT4IjE_eY&t=698s">
    <img src="img/video1.png" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">SHINPHAMM</p>
      <p class="title">
        <strong>10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM</strong>
      </p>
      <p class="meta">11 Tr lượt xem | 5 năm trước</p>
    </div>
    </a>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=your-video-id-1"
    data-img="img/video1.png"
    data-author="SHINPHAMM"
    data-title="10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM"
    data-meta="11 Tr lượt xem | 5 năm trước"
  >YÊU THÍCH</button>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=REwT4IjE_eY&t=698s">
    <img src="img/video1.png" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">SHINPHAMM</p>
      <p class="title">
        <strong>10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM</strong>
      </p>
      <p class="meta">11 Tr lượt xem | 5 năm trước</p>
    </div>
    </a>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=your-video-id-1"
    data-img="img/video1.png"
    data-author="SHINPHAMM"
    data-title="10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM"
    data-meta="11 Tr lượt xem | 5 năm trước"
  >YÊU THÍCH</button>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=REwT4IjE_eY&t=698s">
    <img src="img/video1.png" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">SHINPHAMM</p>
      <p class="title">
        <strong>10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM</strong>
      </p>
      <p class="meta">11 Tr lượt xem | 5 năm trước</p>
    </div>
    </a>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=your-video-id-1"
    data-img="img/video1.png"
    data-author="SHINPHAMM"
    data-title="10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM"
    data-meta="11 Tr lượt xem | 5 năm trước"
  >YÊU THÍCH</button>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=REwT4IjE_eY&t=698s">
    <img src="img/video1.png" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">SHINPHAMM</p>
      <p class="title">
        <strong>10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM</strong>
      </p>
      <p class="meta">11 Tr lượt xem | 5 năm trước</p>
    </div>
    </a>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=your-video-id-1"
    data-img="img/video1.png"
    data-author="SHINPHAMM"
    data-title="10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM"
    data-meta="11 Tr lượt xem | 5 năm trước"
  >YÊU THÍCH</button>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=REwT4IjE_eY&t=698s">
    <img src="img/video1.png" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">SHINPHAMM</p>
      <p class="title">
        <strong>10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM</strong>
      </p>
      <p class="meta">11 Tr lượt xem | 5 năm trước</p>
    </div>
    </a>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=your-video-id-1"
    data-img="img/video1.png"
    data-author="SHINPHAMM"
    data-title="10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM"
    data-meta="11 Tr lượt xem | 5 năm trước"
  >YÊU THÍCH</button>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=REwT4IjE_eY&t=698s">
    <img src="img/video1.png" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">SHINPHAMM</p>
      <p class="title">
        <strong>10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM</strong>
      </p>
      <p class="meta">11 Tr lượt xem | 5 năm trước</p>
    </div>
    </a>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=your-video-id-1"
    data-img="img/video1.png"
    data-author="SHINPHAMM"
    data-title="10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM"
    data-meta="11 Tr lượt xem | 5 năm trước"
  >YÊU THÍCH</button>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=REwT4IjE_eY&t=698s">
    <img src="img/video1.png" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">SHINPHAMM</p>
      <p class="title">
        <strong>10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM</strong>
      </p>
      <p class="meta">11 Tr lượt xem | 5 năm trước</p>
    </div>
    </a>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=your-video-id-1"
    data-img="img/video1.png"
    data-author="SHINPHAMM"
    data-title="10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM"
    data-meta="11 Tr lượt xem | 5 năm trước"
  >YÊU THÍCH</button>
  </div>
  <div class="card">
    <a href="https://www.youtube.com/watch?v=REwT4IjE_eY&t=698s">
    <img src="img/video1.png" alt="Thumbnail" class="card-image" />
    <div class="card-content">
      <p class="author">SHINPHAMM</p>
      <p class="title">
        <strong>10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM</strong>
      </p>
      <p class="meta">11 Tr lượt xem | 5 năm trước</p>
    </div>
    </a>
    <button
    class="like-button"
    onclick="addToFavorites(this)"
    data-url="https://www.youtube.com/watch?v=your-video-id-1"
    data-img="img/video1.png"
    data-author="SHINPHAMM"
    data-title="10 phút TẬP BỤNG đơn giản TẠI NHÀ | AbsWorkout Routine | SHINPHAMM"
    data-meta="11 Tr lượt xem | 5 năm trước"
  >YÊU THÍCH</button>
  </div>


  
</div>
 <div class="pagination" id="pagination"></div>
</section>
<script src="script.js"></script>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/GoodFit/footer.php"); ?>
</body>

</html>