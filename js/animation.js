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
                    link.style.transition = "opacity 0.3s, transform .4s";
                }, index * 100); // Opóźnienie 300ms dla każdego elementu
            });
        }

        lastScrollY = currentScrollY; // Zaktualizuj ostatnią pozycję przewijania
    };

    window.addEventListener("scroll", handleScroll);



    const cutain = document.querySelector(".slide-curtain")
    // Select all <a> elements on the page
    document.querySelectorAll("a").forEach(function (link) {
        link.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent default navigation
            const href = this.getAttribute("href"); // Get the link's URL
            cutain.classList.add("active-slide")
            // Set the delay (e.g., 2 seconds)
            setTimeout(function () {
                if (href) {
                    window.location.href = href; // Navigate to the link
                }
            }, 1000); // 2000 milliseconds = 2 seconds
        });
    });
});