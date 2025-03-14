
document.addEventListener("DOMContentLoaded", () => {
    const fullMenu = document.getElementById("full-menu");
    const menuCross = document.getElementById("menuCross");
    let active = false;
    let lastScrollY = window.scrollY;
    const navBar = document.querySelector("nav");
    const handleScrollNav = () => {
        const currentScrollY = window.scrollY;
        if (currentScrollY > lastScrollY && !active) {
            // dodaj klase kiedy menu nie jest aktywne
            navBar.classList.add("nav-hidden");
        } else {
            navBar.classList.remove("nav-hidden");
        }
        lastScrollY = currentScrollY; // Zaktualizuj ostatnią pozycję przewijania
    }
    window.addEventListener("scroll", handleScrollNav);


    menuCross.addEventListener("click", () => {
        if (!active) {
            fullMenu.classList.add("full-page-menu-active");
            menuCross.classList.add("bars-container-active");
            active = !active
        } else {
            fullMenu.classList.remove("full-page-menu-active");
            menuCross.classList.remove("bars-container-active");
            active = !active
        }

    })
    const menuItems = document.querySelectorAll('.menu-list li a');
    const descItems = document.querySelectorAll('.menu-desc p');

    const displayText = document.getElementById('displayText');

    menuItems.forEach(itemMenu => {
        itemMenu.addEventListener('mouseover', () => {
            // Pobierz wartość z atrybutu data-menu
            const menuItem = itemMenu.getAttribute('data-menu');

            // Iteruj przez wszystkie <p>, aby znaleźć odpowiedni tekst
            descItems.forEach(itemText => {
                const descText = itemText.getAttribute('data-text'); // Pobierz atrybut data-text

                // Jeśli teksty pasują, zaktualizuj wyświetlany tekst
                if (menuItem === descText) {
                    itemText.classList.add("visible"); // Ustaw klasę na elemencie <p>
                    displayText.classList.remove("visible");
                    displayText.classList.add("hidden");
                }
            });
        });

        itemMenu.addEventListener('mouseout', () => {
            // Ukryj tekst po zjechaniu kursorem
            descItems.forEach(itemText => {
                itemText.classList.remove("visible"); // Usuń klasę z elementów <p>
                displayText.classList.remove("hidden");
                displayText.classList.add("visible");

            });

        });
    });

    const listItems = document.querySelectorAll('.classes-list li a');
    const hoverImage = document.getElementById('hover-image');
    listItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            const imageUrl = item.getAttribute('data-image');
            hoverImage.src = "../../images/bjj-classes/" + imageUrl + ".jpg";
            //   hoverImage.src= 'block'; // Pokazujemy obrazek
        });


    });


    window.addEventListener("pageshow", (event) => {
        if (event.persisted) {
            const animatedElements = document.querySelector('.active-slide');
            if (animatedElements.classList.contains("active-slide")) {
                animatedElements.classList.remove("active-slide");
                fullMenu.classList.remove("full-page-menu-active");
                menuCross.classList.remove("bars-container-active");
                active = !active
            }
        }
    });

});