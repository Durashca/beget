const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

// Получаем все радиокнопки
const radioInput = document.querySelectorAll('input[type="radio"]');

radioInput.forEach(button => {
  button.addEventListener('change', () => {
    tooltipList.forEach(tooltip => {
      tooltip.dispose();
    });
  });
});