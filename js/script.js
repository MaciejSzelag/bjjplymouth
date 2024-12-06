
document.addEventListener("DOMContentLoaded", () => {
    const fullMenu = document.getElementById("full-menu");
    const menuCross = document.getElementById("menuCross");
    let active = false;

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
            hoverImage.src = "../../images/" + imageUrl + ".jpg";
            //   hoverImage.src= 'block'; // Pokazujemy obrazek
        });

        // item.addEventListener('mouseleave', () => {
        //     hoverImage.style.display = 'none'; // Ukrywamy obrazek
        // });
    });
    // attention buttons 

    // const links = document.querySelectorAll(".float-contact .main-icon a");
    // const intervalTime = 10000; // 15 sekund
    // const animationDelay = 100; // 300ms opóźnienia między elementami

    // const animateLinks = () => {
    //     links.forEach((link, index) => {
    //         setTimeout(() => {
    //             link.classList.add("attention");

    //             // Usuń klasę po animacji, aby mogła się powtórzyć
    //             setTimeout(() => {
    //                 link.classList.remove("attention");
    //             }, 7000); // 1.1s to czas trwania animacji
    //         }, index * animationDelay);
    //     });
    // };

    // // Uruchom animację natychmiast i w odstępach co 15 sekund
    // animateLinks();
    // setInterval(animateLinks, intervalTime);

});