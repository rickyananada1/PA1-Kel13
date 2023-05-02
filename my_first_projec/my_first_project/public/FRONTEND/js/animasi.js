const profileCards = document.querySelectorAll('.profile-card-2');

function checkCards() {
  profileCards.forEach((card) => {
    const cardTop = card.getBoundingClientRect().top;
    const cardBottom = card.getBoundingClientRect().bottom;

    if (cardTop < window.innerHeight && cardBottom >= 0) {
      card.classList.add('animate__fadeInUp');
    }
  });
}

window.addEventListener('scroll', checkCards);
