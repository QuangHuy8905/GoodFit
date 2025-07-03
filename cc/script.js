document.addEventListener('DOMContentLoaded', function () {
    const userMenu = document.querySelector('.user-menu');
    const toggle = userMenu.querySelector('.user-toggle');
    let isInside = false;
    let hoverTimeout;

    // Toggle on click
    toggle.addEventListener('click', function (e) {
      e.stopPropagation(); // Ngăn click lan ra ngoài
      userMenu.classList.toggle('show');
    });

    // Hover in
    userMenu.addEventListener('mouseenter', function () {
      clearTimeout(hoverTimeout);
      userMenu.classList.add('show');
    });

    // Hover out với delay
    userMenu.addEventListener('mouseleave', function () {
      hoverTimeout = setTimeout(() => {
        userMenu.classList.remove('show');
      }, 300); // Delay 300ms cho user move chuột
    });

    // Click ra ngoài để đóng
    document.addEventListener('click', function (e) {
      if (!userMenu.contains(e.target)) {
        userMenu.classList.remove('show');
      }
    });
  });
