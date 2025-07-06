document.addEventListener("DOMContentLoaded", () => {
  const favorites = JSON.parse(localStorage.getItem("favorites")) || [];
  const list = document.getElementById("fav-list");

if (!favorites.length) {
  list.innerHTML = `<div class="empty-message">Bạn chưa yêu thích bất cứ video nào.</div>`;
} else {
    favorites.forEach((video, index) => {
      const card = document.createElement("div");
      card.className = "card";
      card.innerHTML = `
        <a href="${video.url}" target="_blank">
          <img src="${video.img}" class="card-image" />
          <div class="card-content">
            <p class="author">${video.author}</p>
            <p class="title"><strong>${video.title}</strong></p>
            <p class="meta">${video.meta}</p>
          </div>
        </a>
        <button class="remove-fav" data-index="${index}">❌</button>
      `;
      list.appendChild(card);
    });
  }

  list.addEventListener("click", (e) => {
    if (e.target.classList.contains("remove-fav")) {
      const i = parseInt(e.target.dataset.index);
      favorites.splice(i, 1);
      localStorage.setItem("favorites", JSON.stringify(favorites));
      location.reload();
    }
  });

  // Trainer cards
  const trainerList = JSON.parse(localStorage.getItem('followedTrainers')) || [];
  const container = document.getElementById('trainer-fav-container');

  if (!trainerList.length) {
    container.innerHTML = "<p style='text-align:left; padding-left:20px;'>Bạn chưa theo dõi huấn luyện viên nào.</p>";
  } else {
    trainerList.forEach((t, index) => {
      const descHTML = t.desc.map(d => `<p>${d}</p>`).join("");
      container.innerHTML += `
        <div class="card">
          <div class="card-image-wrapper">
            <img src="${t.img}" alt="HLV ${t.name}">
          </div>
          <div class="card-info">
            <h3>${t.name}</h3>
            ${descHTML}
            <button class="remove-fav" onclick="removeTrainer(${index})">❌</button>
          </div>
        </div>`;
    });
  }
});

function removeTrainer(index) {
  const trainers = JSON.parse(localStorage.getItem('followedTrainers')) || [];
  trainers.splice(index, 1);
  localStorage.setItem('followedTrainers', JSON.stringify(trainers));
  location.reload();
}
