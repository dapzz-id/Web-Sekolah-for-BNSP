document.addEventListener("DOMContentLoaded", () => {
    // Inisialisasi filter
    const filterButtons = document.querySelectorAll("section:nth-of-type(2) button"); 
    const allArticles = document.querySelectorAll("section:nth-of-type(3) article");

    // Tambahkan event listener untuk setiap tombol filter
    filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            // Reset style semua tombol
            filterButtons.forEach(btn => {
                btn.classList.remove("bg-[#fe914e]", "text-white");
                btn.classList.add("bg-white", "text-neutral-600");
            });

            // Aktifkan tombol yang diklik
            button.classList.remove("bg-white", "text-neutral-600");
            button.classList.add("bg-[#fe914e]", "text-white");

            // Ambil kategori dari tombol yang diklik
            const category = button.textContent.trim();

            // Tampilkan atau sembunyikan artikel berdasarkan kategori
            allArticles.forEach((article) => {
                // Ambil kategori dari artikel (ada di dalam <span>)
                const categorySpan = article.querySelector("span");

                // Ambil kategori dari artikel
                const articleCategory = categorySpan ? categorySpan.textContent.trim() : "";

                // Tampilkan atau sembunyikan artikel berdasarkan kategori
                if (category === "Semua" || articleCategory === category) {
                    article.style.display = "block";
                } else {
                    article.style.display = "none";
                }
            });
        });
    });

    // set default untuk tampil semua
    filterButtons[0].click();
});