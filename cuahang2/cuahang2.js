document.querySelector(".outline-button").addEventListener("click", function () {
  const name = document.querySelector(".product-title").textContent.trim();
  const priceText = document.querySelector(".product-price").textContent.trim();
  const price = parseInt(priceText.replace(/\D/g, '')); // Lấy số từ "999.000 VND"
});

function showCustomAlert(message) {
  const alertBox = document.getElementById("custom-alert");
  alertBox.querySelector("p").textContent = message;
  alertBox.classList.remove("hidden");
}

function closeCustomAlert() {
  document.getElementById("custom-alert").classList.add("hidden");
}