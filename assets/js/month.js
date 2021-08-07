document.addEventListener('DOMContentLoaded', () => {
  /**
   * @link: https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Date/getMonth
   */
  // Récupération du mois ( de 0 à 11)
  const date = new Date();
  const month = date.getMonth();
  let monthName;

  switch (month) {
    case 0:
      monthName = 'janvier';
      break;
    case 1:
      monthName = 'février';
      break;
    case 2:
      monthName = 'mars';
      break;
    case 3:
      monthName = 'avril';
      break;
    case 4:
      monthName = 'mai';
      break;
    case 5:
      monthName = 'juin';
      break;
    case 6:
      monthName = 'juillet';
      break;
    case 7:
      monthName = 'août';
      break;
    case 8:
      monthName = 'septembre';
      break;
    case 9:
      monthName = 'octobre';
      break;
    case 10:
      monthName = 'novembre';
      break;
    case 11:
      monthName = 'décembre';
      break;
    default:
      console.log('Quel est ce mois');
  }

  // Sélection du titre à générer
  const titleHero = document.querySelector('.title--hero');
  titleHero.innerText = monthName;
});
