console.log('trwr.js');

const transition_warning = document.getElementById('transition_warning');
console.log(transition_warning);

transition_warning.setAttribute('data-bs-toggle', 'tooltip');
transition_warning.setAttribute('data-bs-placement', 'top');
transition_warning.setAttribute('data-bs-custom-class', "custom-tooltip");
transition_warning.setAttribute('data-bs-title', 'Выберите ответ');

document.addEventListener('DOMContentLoaded', function() {
    const tooltipTriggerEl = document.querySelector('[data-bs-toggle="tooltip"]');
    const tooltip = new bootstrap.Tooltip(tooltipTriggerEl);

    tooltipTriggerEl.addEventListener('mouseenter', function() {
        const radioButtons = document.querySelectorAll('input[type="radio"]');
        const isAnyRadioChecked = Array.from(radioButtons).some(radio => radio.checked);

        if (!isAnyRadioChecked) {
            tooltip.show();
            setTimeout(() => {
                tooltip.hide();
            }, 4000); 
        }
    });
});
