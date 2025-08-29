document.addEventListener("DOMContentLoaded", () => {
    // Inisialisasi form kontak
    const form = document.getElementById("contactForm");
    const responseMessage = document.getElementById("responseMessage");

    // Cek apakah form ada
    if (!form) return;

    const submitBtn = form.querySelector('button[type="submit"]');
    form.addEventListener("submit", async (e) => {
        // Prevent default untuk mencegah melakukan submit normal ke server dan reload halaman
        e.preventDefault();

        submitBtn.disabled = true;
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = "Mengirim...";

        // Ambil data dari form
        const formData = new FormData(form);

        try {
            // Kirim data form ke server
            const response = await axios.post(form.dataset.url, formData, {
                headers: { "Content-Type": "multipart/form-data" },
            });

            responseMessage.innerHTML = `<p style="color: green;">${response.data.message}</p>`;
            form.reset();
        } catch (error) {
            console.log(error);
            if (error.response && error.response.data.errors) {
                let errors = Object.values(error.response.data.errors).flat();
                responseMessage.innerHTML = `<p style="color: red;">${errors.join("<br>")}</p>`;
            } else {
                responseMessage.innerHTML = `<p style="color: red;">Terjadi kesalahan, coba lagi.</p>`;
            }
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
        }
    });
});