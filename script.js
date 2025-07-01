const categories = document.querySelectorAll('.category');
const videoImage = document.querySelector('.video-image img');
const videoList = document.querySelector('.video-list');

const videoData = {
  Fitness: {
    img: 'img/fitness.jpg',
    items: [
      { title: 'Fitness Cơ Bản', desc: 'Bạn đang tìm kiếm điểm khởi đầu an toàn và hiệu quả để cải thiện thể lực? Fitness được thiết kế dành riêng cho những người chưa từng hoặc ít khi tập luyện. Chúng tôi sẽ hướng dẫn bạn từng động tác cơ bản một cách chi tiết, tập trung vào kỹ thuật đúng để tránh chấn thương và giúp bạn làm quen dần với cường độ. Bạn sẽ được làm quen với các bài tập khởi động, làm nóng cơ thể, các động tác squat, plank, chống đẩy biến thể và các bài tập giãn cơ cuối buổi. Mục tiêu là xây dựng nền tảng sức bền, tăng cường sức mạnh cốt lõi và làm quen với nhịp điệu tập luyện đều đặn, tạo tiền đề vững chắc cho các buổi tập nâng cao hơn sau này.' },
      { title: 'Bài Tập Toàn Thân Hiệu Quả Tại Nhà', desc: 'Chuỗi bài tập được thiết kế linh hoạt, kết hợp các động tác Compound (đa khớp) giúp tác động đồng thời nhiều nhóm cơ lớn, tối ưu hóa quá trình đốt cháy calo và tăng cường trao đổi chất. Từ burpees, lunges, mountain climbers cho đến các biến thể của plank và push-up, mỗi động tác đều được giải thích rõ ràng và có các lựa chọn điều chỉnh để phù hợp với mọi cấp độ thể lực. Hãy chuẩn bị tinh thần đổ mồ hôi và cảm nhận sự săn chắc của cơ thể sau mỗi buổi tập!' }
    ]
  },
  Yoga: {
    img: 'img/yoga.jpg',
    items: [
      { title: 'Yoga Cho Người Mới', desc: 'Nếu bạn đang tìm kiếm một cách nhẹ nhàng để bắt đầu hành trình cải thiện sức khỏe, Yoga là lựa chọn hoàn hảo. Khóa học này sẽ giúp bạn làm quen với các tư thế cơ bản như cat-cow, child’s pose và downward dog. Không chỉ giúp cải thiện sự linh hoạt và thăng bằng, các bài tập còn hỗ trợ giảm căng cơ và cải thiện hơi thở sâu, giúp bạn cảm thấy thư thái và nhẹ nhàng hơn mỗi ngày.' },
      { title: 'Thư Giãn Cơ Thể & Tâm Trí', desc: 'Sau một ngày dài mệt mỏi, đây là chuỗi bài tập lý tưởng để bạn tái tạo năng lượng. Thông qua việc điều hòa hơi thở và thực hiện các động tác chậm rãi, bạn sẽ cảm nhận được sự thư giãn sâu sắc từ trong ra ngoài. Những buổi tập này hỗ trợ giảm căng thẳng, cải thiện giấc ngủ và nâng cao chất lượng sống tinh thần lâu dài.' }
    ]
  },
  "HIIT": {
    img: 'img/hiit.jpg',
    items: [
      { title: 'HIIT 15 Phút Đốt Mỡ', desc: 'Thiết kế dành riêng cho những người bận rộn, chuỗi bài tập cường độ cao này giúp bạn đốt cháy calo cực nhanh chỉ trong 15 phút mỗi ngày. Kết hợp các động tác như jump squats, high knees và push-up biến thể, bạn sẽ vừa tăng nhịp tim, vừa cải thiện khả năng chịu đựng của toàn cơ thể. Một lựa chọn tuyệt vời để đốt mỡ và giữ vóc dáng săn chắc.' },
      { title: 'HIIT Không Dụng Cụ', desc: 'Bạn không cần đến phòng gym hay thiết bị nào cả — chỉ cần một tấm thảm và tinh thần quyết tâm. Bài tập sử dụng hoàn toàn trọng lượng cơ thể, từ burpees cho đến mountain climbers. Đây là chương trình tập tại nhà hiệu quả, giúp tăng cường sức mạnh cơ lõi và cải thiện hệ trao đổi chất một cách toàn diện.' }
    ]
  },
  Cardio: {
    img: 'img/cardio.jpg',
    items: [
      { title: 'Cardio Nâng Cao Sức Bền', desc: 'Bạn đang muốn cải thiện tim mạch và tăng sức bền vận động? Chương trình Cardio này là sự kết hợp hoàn hảo giữa các bài tập aerobic nhịp độ vừa và nhanh, giúp cải thiện dung tích phổi, tuần hoàn máu và khả năng vận động dẻo dai. Chỉ sau vài buổi tập, bạn sẽ cảm nhận được sự khác biệt rõ rệt về độ bền thể lực và sức khỏe tổng quát.' },
      { title: 'Cardio Nhẹ Cho Buổi Sáng', desc: 'Khởi động ngày mới một cách tích cực với những bài cardio nhẹ nhàng. Các động tác như step touch, arm circles và side lunges sẽ giúp kích hoạt toàn bộ cơ thể, tăng tuần hoàn máu và cung cấp năng lượng dồi dào cho cả ngày. Đây là cách tuyệt vời để cải thiện tinh thần, giảm căng thẳng và nâng cao hiệu suất làm việc.' }
    ]
  },
  Gymnastics: {
    img: 'img/gymnastics.jpg',
    items: [
      { title: 'Cơ Bản Về Thăng Bằng', desc: 'Khóa học này tập trung vào việc xây dựng nền tảng kiểm soát cơ thể thông qua các bài tập giữ thăng bằng đơn giản. Từ động tác đứng một chân, plank tay co, đến giữ thăng bằng trên sàn bằng tay hoặc khuỷu tay — tất cả đều giúp bạn phát triển khả năng điều khiển trọng tâm và tăng cường nhóm cơ trung tâm (core). Đây là bước đầu quan trọng để tiến tới các kỹ thuật khó hơn trong thể dục nghệ thuật.' },
      { title: 'Sức Mạnh & Linh Hoạt', desc: 'Không chỉ yêu cầu sự dẻo dai, Gymnastics còn đòi hỏi sức mạnh bền vững. Những bài tập trong chương trình này sẽ giúp bạn phát triển đồng thời cả hai yếu tố. Kết hợp giữa các động tác kéo giãn sâu, đu xà, động tác đảo người và nâng người giúp tăng cường sức mạnh cơ bắp, cải thiện độ linh hoạt và kiểm soát chuyển động toàn thân một cách tối ưu.' }
    ]
  }
};

categories.forEach(btn => {
  btn.addEventListener('click', () => {
    categories.forEach(c => c.classList.remove('active'));
    btn.classList.add('active');

    const category = btn.textContent.trim();
    const data = videoData[category];

    if (data) {
      videoImage.src = data.img;
      videoList.innerHTML = data.items.map(item => `
        <div class="video-item">
          <h3>${item.title}</h3>
          <p>${item.desc}</p>
        </div>
      `).join('');
    }
  });

  // Gọi mặc định khi trang load lần đầu
window.addEventListener('DOMContentLoaded', () => {
  const defaultCategory = 'Fitness';
  const defaultBtn = Array.from(categories).find(btn => btn.textContent.trim() === defaultCategory);
  if (defaultBtn) defaultBtn.click(); // Giả lập hành động click để đồng bộ nội dung
});

});
