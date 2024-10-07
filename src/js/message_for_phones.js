document.addEventListener("DOMContentLoaded", function () {
    // распознает устройство
    let pre_emptive_letter = document.getElementById('pre_emptive_letter');
    if (!pre_emptive_letter) {
        console.log('Элемент с ID "pre_emptive_letter" не найден в DOM.');
        return;
    }

    if (window.innerWidth < 868) {
        // телефон
        // скрыть задание
        let keyboardShortcutBlock = document.querySelector('div.keyboard-shortcut-block.dashed');
        if (keyboardShortcutBlock) {
            keyboardShortcutBlock.style.display = 'none';
        } else {
            console.log('Элемент с селектором "div.keyboard-shortcut-block.dashed" не найден в DOM.');
        }

        // текст
        let p = document.createElement('p');
        p.textContent = 'Если вы проходите задания с телефона то ссылка на следующую страницу вам открыта';
        pre_emptive_letter.appendChild(p);
        pre_emptive_letter.classList.add('bd-callout-orange');
        console.log(pre_emptive_letter.classList.contains('bd-callout-orange')); // true, если класс был успешно добавлен

    } else {
        // пк
        if (pre_emptive_letter) {
            pre_emptive_letter.style.display = 'none';
        } else {
            console.log('Элемент с ID "pre_emptive_letter" не найден в DOM.');
        }
    }
});