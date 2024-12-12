const modal = document.getElementById("imageModal");
const modalImg = document.getElementById("modalImage");
const closeBtn = document.querySelector(".modal-close");
const images = document.querySelectorAll(".modal-trigger");
const form = document.getElementById('messageForm');



images.forEach((img) => {
  img.addEventListener("click", () => {
    const newSrc = img.getAttribute("data-modal-src");
    modal.style.display = "block";
    modalImg.src = newSrc;
    modalImg.alt = img.alt;
  });
});

closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
});

modal.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.style.display = "none";
  }
});

