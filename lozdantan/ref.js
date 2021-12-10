var button = document.getElementById('refBasket');

button.addEventListener('click', (e) => {
   e.stopPropagation();
   alert('Votre référence c\'est enregistré \n automatiquement danc le CONTACT')
});

