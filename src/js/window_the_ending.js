document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("Modal");
    const userName = localStorage.getItem("userName");
    const userSurname = localStorage.getItem("userSurname");
    const expires = localStorage.getItem("expires");
  
    if (userName && userSurname && expires > Date.now()) {
      // Данные есть и срок истечения не истек, не показываем окно
      return;
    } else if (userName && userSurname && expires < Date.now()) {
      // Данные есть, но срок истечения истек, удаляем данные
      localStorage.removeItem("userName");
      localStorage.removeItem("userSurname");
      localStorage.removeItem("expires");
    }
  
    // Показываем окно
    modal.style.display = "block";
  
    const continueButton = document.getElementById("continue");
    continueButton.addEventListener("click", function (e) {
      e.preventDefault();
      const name = document.getElementById("name").value;
      const surname = document.getElementById("surname").value;
  
      if (name && surname) {
        const expires = Date.now() + 1 * 60 * 60 * 1000; // 1 час
        localStorage.setItem("userName", name);
        localStorage.setItem("userSurname", surname);
        localStorage.setItem("expires", expires);
        modal.style.display = "none";
        location.reload(); // перезагрузка страницы
      }
    });
    
  });