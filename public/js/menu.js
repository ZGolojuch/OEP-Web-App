// document.addEventListener("DOMContentLoaded", () => {
//     const nav = document.querySelector("nav");
//     const toggleButton = document.getElementById("nav-toggle");
//
//     toggleButton.addEventListener("click", () => {
//         nav.classList.toggle("active"); // Przełącz klasę aktywności nawigacji
//     });
// });

// document.addEventListener("DOMContentLoaded", () => {
//     const nav = document.querySelector("nav");
//     const toggleButton = document.getElementById("nav-toggle");
//
//     // Obsługa kliknięcia przycisku hamburgerowego
//     toggleButton.addEventListener("click", () => {
//         nav.classList.toggle("active"); // Przełącz klasę aktywną
//     });
// });


document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger'); // Ikona hamburgera
    const nav = document.querySelector('nav'); // Nawigacja

    // Obsługa kliknięcia w hamburger
    hamburger.addEventListener('click', () => {
        nav.classList.toggle('active'); // Dodanie/usunięcie klasy 'active' z nav
    });
});