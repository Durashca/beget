console.log('footer')
document.addEventListener('DOMContentLoaded', function() {
    const footerHTML = `
        <footer class="bd-footer py-4 mt-5 bg-body-secondary" style="position: fixed; bottom: 0px; width: 100%;">
            <div class="container">
                <p>ВсеЗнай 2024</p>
                <p>© <strong>Космылев Владислав Евгеньевич</strong></p>
            </div>
        </footer>
    `;

    const body = document.querySelector('body');
    const footerElement = document.createElement('div');
    footerElement.innerHTML = footerHTML;
    body.appendChild(footerElement);
});