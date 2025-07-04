document.querySelector(".outline-button").addEventListener("click", function () {
  const name = document.querySelector(".product-title").textContent.trim();
  const priceText = document.querySelector(".product-price").textContent.trim();
  const price = parseInt(priceText.replace(/\D/g, '')); // Lấy số từ "999.000 VND"

  fetch("add_to_cart.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: `name=${encodeURIComponent(name)}&price=${encodeURIComponent(price)}`
  })
  .then(response => response.text())
  .then(data => alert(data))
  .catch(error => alert("Lỗi khi thêm vào giỏ hàng: " + error));
});