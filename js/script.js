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

})// Pobierz wszystkie elementy <a> w menu-list
const menuItems = document.querySelectorAll('.menu-list li a');
const descItems = document.querySelectorAll('.menu-desc p');

// Pobierz element, w którym ma się wyświetlać tekst
const displayText = document.getElementById('displayText');
// displayText.textContent = "Opis tutaj"
// Iter  displayText.textContent = "Opis tutaj"uj przez wszystkie elementy <a>
menuItems.forEach(itemMenu => {
    itemMenu.addEventListener('mouseover', () => {
        // Pobierz wartość z atrybutu data-menu
        const menuItem = itemMenu.getAttribute('data-menu');

        // Sprawdź, czy atrybut istnieje
        if (!menuItem) {
            console.warn("Element <a> nie ma atrybutu 'data-menu'");
            return;
        }

        // Iteruj przez wszystkie <p>, aby znaleźć odpowiedni tekst
        descItems.forEach(itemText => {
            const descText = itemText.getAttribute('data-text'); // Pobierz atrybut data-text
            if (!descText) {
                console.warn("Element <p> nie ma atrybutu 'data-text'");
                return;
            }

            // Jeśli teksty pasują, zaktualizuj wyświetlany tekst
            if (menuItem === descText) {
                itemText.classList.add("visible"); // Ustaw klasę na elemencie <p>
                displayText.classList.remove("visible");
                displayText.classList.add("hidden");
                console.log(menuItem + " - " + descText); // Działa poprawnie
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