document.querySelector(".outline-button").addEventListener("click", function () {
  const name = document.querySelector(".product-title").textContent.trim();
  const priceText = document.querySelector(".product-price").textContent.trim();
  const price = parseInt(priceText.replace(/\D/g, '')); // Lấy số từ "999.000 VND"
});