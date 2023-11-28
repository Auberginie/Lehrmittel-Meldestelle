// STIKY HEADER
window.addEventListener('scroll', function() {
    var scroll = window.pageYOffset || document.documentElement.scrollTop;

    if (scroll >= 40) {
        document.getElementById('header').classList.add('fix');
    } else {
        document.getElementById('header').classList.remove('fix');
    }
});

//MENU SCHLIESSEN BEI SEITEN LADEN
window.addEventListener('load', function() {
    // Warte, bis die Seite vollständig geladen ist
    let checkbox = document.querySelector('.burger_checkbox');
    
    if (checkbox) {
        checkbox.checked = false; // Abwählen der Checkbox
    }
});