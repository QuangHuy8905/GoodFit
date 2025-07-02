  function toggleFAQ(element) {
    const item = element.parentElement;
    item.classList.toggle("open");

    const answer = item.querySelector(".faq-answer");
    answer.style.display = item.classList.contains("open") ? "block" : "none";

    const icon = item.querySelector(".faq-icon");
    icon.innerHTML = item.classList.contains("open")
      ? '<path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2"/>' // dấu -
      : '<path d="M5 12h14" stroke="currentColor" stroke-width="2"/>'; // dấu +
  }
