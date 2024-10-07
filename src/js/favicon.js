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