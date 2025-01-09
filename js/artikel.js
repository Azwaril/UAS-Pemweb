let slideIndex = 0;

function showSlide(n) {
    const slides = document.querySelectorAll(".slide");
    slideIndex = (n + slides.length) % slides.length; // Mengatur slideIndex dalam rentang yang valid
    slides.forEach((slide, index) => {
        slide.style.display = index === slideIndex ? "block" : "none"; // Menampilkan slide yang sesuai
    });
}

function changeSlide(n) {
    slideIndex += n; // Memperbarui slideIndex dengan n
    const slides = document.querySelectorAll(".slide");
    slideIndex = (slideIndex + slides.length) % slides.length; // Memastikan slideIndex tetap dalam rentang yang valid
    showSlide(slideIndex); // Menampilkan slide yang sesuai
}

// Memastikan slide pertama ditampilkan setelah semua konten dimuat
document.addEventListener("DOMContentLoaded", function () {
    showSlide(slideIndex);
});
