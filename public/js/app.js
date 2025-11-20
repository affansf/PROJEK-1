import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    var submenu = document.getElementById("submenuArtikel");

    // selalu paksa submenu tertutup saat halaman dimuat
    if (submenu) {
        submenu.classList.remove("show");
    }
});
