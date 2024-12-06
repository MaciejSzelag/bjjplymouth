document.addEventListener("DOMContentLoaded", () => {
    const links = document.querySelectorAll(".float-contact .main-icon a");
    let lastScrollY = window.scrollY;

    const handleScroll = () => {
        const currentScrollY = window.scrollY;

        if (currentScrollY > lastScrollY) {
            // Scrollowanie w dół - chowaj wszystkie elementy jednocześnie
            links.forEach(link => {
                link.style.opacity = "0"; // Chowanie
                link.style.transform = "translateY(50px)"; // Przesunięcie w dół
                link.style.transition = "opacity 0.3s, transform 0.3s";
            });
        } else {
            // Scrollowanie w górę - pokazuj elementy kolejno
            links.forEach((link, index) => {
                setTimeout(() => {
                    link.style.opacity = "1"; // Pokazywanie
                    link.style.transform = "translateY(0)"; // Powrót do pozycji
                    link.style.transition = "opacity 0.3s, transform .7s";
                }, index * 100); // Opóźnienie 300ms dla każdego elementu
            });
        }

        lastScrollY = currentScrollY; // Zaktualizuj ostatnią pozycję przewijania
    };

    window.addEventListener("scroll", handleScroll);
});