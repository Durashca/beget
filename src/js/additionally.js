document.addEventListener('DOMContentLoaded', function() {
    // Проверяем, существует ли уже элемент <link> с атрибутом rel="icon"
    var iconLink = document.querySelector('link[rel="icon"]');
    if (!iconLink) {
      // Если нет, создаем его и добавляем в <head>
      var link = document.createElement('link');
      link.rel = 'icon';
      link.type = 'image/png';
      link.sizes = '32x32';
      link.href = '/favicon.png';  // Путь к вашей иконке
      document.head.appendChild(link);
    }
  
    console.log('footer')
    addFooter();
  
    var modal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    modal.show();
  
    // Добавляем CSS-файлы
    const cssFiles = [
      'src/css/OfflineBootstrapCss.css',
      'src/css/indentation.css',
      'src/css/bootstrap.css',
      'src/css/material/hotkeys/alignment.css',
      'src/css/material/screenshots/alignment.css',
      'src/css/img.css',
      'src/css/menu.css',
      'src/css/advertisement.css',
      'src/css/block_radio.css'
    ];
  
    cssFiles.forEach((cssFile) => {
      const link = document.createElement('link');
      link.rel = 'stylesheet';
      link.href = cssFile;
      document.head.appendChild(link);
    });
  
    // Добавляем JavaScript-файлы
    const jsFiles = [
      'src/js/navbar_creator.js',
      'src/js/OfflineBootstrapJs.js'
    ];
  
    jsFiles.forEach((jsFile) => {
      const script = document.createElement('script');
      script.src = jsFile;
      document.body.appendChild(script);
    });
  });
  
  function addFooter() {
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
  }