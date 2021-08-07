document.addEventListener('DOMContentLoaded', () => {
  // Récupération du mois ( de 1 à 12)
  const date = new Date();
  const month = date.getMonth();
  let monthName;

  switch (month) {
    case 1:
      monthName = 'janvier';
      break;
    case 2:
      monthName = 'février';
      break;
    case 3:
      monthName = 'mars';
      break;
    case 4:
      monthName = 'avril';
      break;
    case 5:
      monthName = 'mai';
      break;
    case 6:
      monthName = 'juin';
      break;
    case 7:
      monthName = 'juillet';
      break;
    case 8:
      monthName = 'août';
      break;
    case 9:
      monthName = 'septembre';
      break;
    case 10:
      monthName = 'octobre';
      break;
    case 11:
      monthName = 'novembre';
      break;
    case 12:
      monthName = 'decembre';
      break;
    default:
      console.log('Quel est ce mois');
  }

  // Sélection du titre à générer
  const titleHero = document.querySelector('.title--hero');
  titleHero.innerText = monthName;
});
