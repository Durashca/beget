const images = document.querySelectorAll('img');
const closeButton = document.createElement('span');
closeButton.className = 'close-button';
closeButton.innerHTML = '&times;';
document.body.appendChild(closeButton);

images.forEach(image => {
    image.addEventListener('click', () => {
        image.classList.toggle('enlarged');
        closeButton.style.display = image.classList.contains('enlarged') ? 'block' : 'none';
        document.body.style.overflow = image.classList.contains('enlarged') ? 'hidden' : 'auto';
    });

    closeButton.addEventListener('click', () => {
        image.classList.remove('enlarged');
        closeButton.style.display = 'none';
    });
});