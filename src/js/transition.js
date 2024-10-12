console.log('zzz');
const RadioInput = document.querySelectorAll('input[type="radio"]');
const button = document.getElementById('createPageButton');
button.classList.add('disabled');
RadioInput.forEach(radioButton => {
  radioButton.addEventListener('change', () => {
    button.classList.remove('disabled');
  });
});




