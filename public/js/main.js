/* ========================= */
/* ======={ License }======= */
/* =========================
// Copyright && Icappucino 2023
// Github : https://github.com/Icappucino
// Instagram : https://www.instagram.com/icappucino_/
// Powered by Spacecode.id
// Instagram Vendor : https://www.instagram.com/spacecode.id/
=============================*/

/* Navbar Setting */
const navbar = document.getElementsByTagName('nav')[0];
window.addEventListener('scroll', function(){
    if (window.scrollY > 1){
        navbar.classList.replace('bg-transparent', 'nav-color');
    } else if (window.scrollY <= 0){
        navbar.classList.replace('nav-color', 'bg-transparent');
    }
});
