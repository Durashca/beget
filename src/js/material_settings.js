function LessonInfo(name, description, link) {
    this.name = name;
    this.description = description;
    this.link = link;
}

function LessonElement(lessonButton, name, description, numberLesson, link) {
    this.lessonButton = lessonButton;
    this.name = name;
    this.description = description;
    this.numberLesson = numberLesson;
    this.link = link;

    lessonButton.href = link;
}
/*добавляем элементы*/
let lessons = [

    new LessonInfo("Логин", "Разбираем понятия: авторизация, регистрация, аутентификация и тд.", "the_memo.html"),
    new LessonInfo("Сочетание Ctrl с другими клавишами", "Вставить, копировать, вырезать, отменить последнее действие", "hotkeys.html"),
    new LessonInfo("Функциональные клавиши", "home, end, Num Lock", "basic_keys.html"),
    new LessonInfo("F клавиши", "Настройка звука, яркости экрана, управление видео", "f_keys.html"),
    new LessonInfo("Скриншоты", "PrtScr", "screenshots.html"),
    new LessonInfo("Перенос файла через USB-подключение", "перенос файлов, документов, изображений", "transferring_files.html"),
    new LessonInfo("Скачивание приложений", "Скачиваем приложения", "download_the_application.html"),
    new LessonInfo("Удаление приложений", "Удаление ненужных программ", "uninstalling_an_application.html"),
    new LessonInfo("Исправление ошибок со звуком", "Исправление ошибок с воспроизведением звука", "audio_errors.html"),
    new LessonInfo("Пароль", "Варианты входа", "device_password.html")

];

material.createLessons(lessons);
material.showLessons();
