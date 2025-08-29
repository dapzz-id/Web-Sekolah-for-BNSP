document.addEventListener("DOMContentLoaded", () => {
    // Inisialisasi tombol navbar
    const homeButtons = document.querySelectorAll("#home-button");
    const contactButtons = document.querySelectorAll("#contact-button");
    const aboutButtons = document.querySelectorAll("#about-button");
    const activitiesButtons = document.querySelectorAll("#activities-button");
    const newsButtons = document.querySelectorAll("#news-button");
    const menuBtn = document.getElementById("mobile-menu-button");

    // Fungsi untuk mengarahkan pengguna ke halaman Home
    homeButtons.forEach(function(homeButton) {
        homeButton.addEventListener("click", function() {
            window.location.href = homeButton.dataset.url;
        });
    });

    // Fungsi untuk mengarahkan pengguna ke halaman Contact
    contactButtons.forEach(function(contactButton) {
        contactButton.addEventListener("click", function() {
            window.location.href = contactButton.dataset.url;
        });
    });

    // Fungsi untuk mengarahkan pengguna ke halaman About
    aboutButtons.forEach(function(aboutButton) {
        aboutButton.addEventListener("click", function() {
            window.location.href = aboutButton.dataset.url;
        });
    });

    // Fungsi untuk mengarahkan pengguna ke halaman Activities
    activitiesButtons.forEach(function(activitiesButton) {
        activitiesButton.addEventListener("click", function() {
            window.location.href = activitiesButton.dataset.url;
        });
    });

    // Fungsi untuk mengarahkan pengguna ke halaman News
    newsButtons.forEach(function(newsButton) {
        newsButton.addEventListener("click", function() {
            window.location.href = newsButton.dataset.url;
        });
    });

    // Menangani klik pada tombol menu
    menuBtn.addEventListener("click", function () {
        const menu = document.getElementById("mobile-menu");
        menu.classList.toggle("hidden");
    });
});