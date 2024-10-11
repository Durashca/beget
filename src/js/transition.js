console.log('zzz');
const radioButtons = document.querySelectorAll('input[type="radio"]');
const link = document.querySelector('a.nav-link.active');

radioButtons.forEach(radioButton => {
  radioButton.addEventListener('change', () => {
    link.classList.remove('disabled');
  });
  link.classList.add('disabled');
});



