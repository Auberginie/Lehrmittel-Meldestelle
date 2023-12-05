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

//FORMULAR HELPER ISBN-NUMMER
function formatiereInput(input) {
    // Entferne alle vorhandenen Nicht-Ziffern
    let unformattedValue = input.value.replace(/\D/g, '');

    // Füge die Trennzeichen entsprechend dem gewünschten Muster ein
    let formattedValue = '';
    for (let i = 0; i < unformattedValue.length; i++) {
        if (i === 3 || i === 4 || i === 7 || i === 12 || i === 13) {
            formattedValue += '-';
        }
        formattedValue += unformattedValue[i];
    }

    // Setze den formatierten Wert zurück ins Eingabefeld
    input.value = formattedValue;
}

//AKKORDEON
document.addEventListener('DOMContentLoaded', function () {
  const accordionItems = document.querySelectorAll('.accordion-item');

  accordionItems.forEach(item => {
    const button = item.querySelector('.accordion-button');
    const content = item.querySelector('.accordion-content');

    button.addEventListener('click', function () {
      // Toggle the max-height property to open/close the content
      content.style.maxHeight = content.style.maxHeight === '0px' ? content.scrollHeight + 'px' : '0px';

      // Toggle the 'open' class on the button
      button.classList.toggle('open');
    });
  });
});