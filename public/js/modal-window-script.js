// ---------------------------------
// modal_id - id модального окна (уникальный)
// data-modal-window - data-атрибут, назначаемый элементу, который открывает модальное окно с id = modal_id (уникальный)
// modal_button - css-селектор, назначаемый элементу, который открывает модальное окно
// lock_padding - css-селектор, назначаемый элементам с position: fixed с целью не добавлять им padding-right при скрытии скролла
// сами модальные окна (их html-разметка) должны располагаться ВНИЗУ страницы (после футера, перед скриптами)
// это необходимо для правильной работы z-index у затемняющего фона, чтобы этот фон перекрывал элементы с position:fixed
// ---------------------------------

document.addEventListener('DOMContentLoaded', function () {
    const modalButtons = document.querySelectorAll('.modal_button');
    const body = document.querySelector('body');
    const lockPaddings = document.querySelectorAll(".lock_padding");
    // расчёт ширины скроллбара
    const lockPaddingValue = window.innerWidth - document.querySelector('body').offsetWidth;

    const header = document.querySelector('.header');

    let unlock = true;

    const timeout = 200;            // данное значение равно задержке у свойства transition

    if (modalButtons.length > 0) {
        for (let modalButton of modalButtons) {
            modalButton.addEventListener('click', function (e) {            // кнопка открытия окна
                const modalName = modalButton.dataset.modalWindow;
                const currentModal = document.getElementById(modalName);
                openModal(currentModal);
                e.preventDefault();
            });
        }
    }
    const closeModalIcons = document.querySelectorAll('.modal_close');
    if (closeModalIcons.length > 0) {
        for (let closeModalIcon of closeModalIcons) {
            closeModalIcon.addEventListener('click', function (e) {         // кнопка закрытия окна
                closeModal(closeModalIcon.closest('.modal'));
                e.preventDefault();
            });
        }
    }

    function openModal(currentModal) {                                              // функция открытия окна
        if (currentModal && unlock) {
            const modalActive = document.querySelector('.modal.opened');      // работа с вложенными модальными окнами
            if (modalActive) {                                                      // если уже есть открытое окно:
                closeModal(modalActive, false);                            // закрыть предыдущее окно, скролл оставить заблоченным
            } else {
                bodyLock();
            }
            currentModal.classList.add('opened');
            currentModal.addEventListener("click", function (e) {                   // закрыть окно по нажатию мимо окна (клик по фону)
                if (!e.target.closest('.modal_content')) {
                    closeModal(e.target.closest('.modal'));
                }
            });
        }
    }
    function closeModal(modalActive, doUnlock = true) {     // закрытие окна
        if (unlock) {
            modalActive.classList.remove('opened');
            if (doUnlock) {
                bodyUnLock();                                   // разблокировать скролл у body при закрытии окна
            }
        }
    }

    function bodyLock() {
        // padding-right у body не оказывает эффекта на fixed-элементы, поэтому им надо отдельно добавить padding-right
        for (let lockPadding of lockPaddings) {
            lockPadding.style.paddingRight = parseInt(window.getComputedStyle(lockPadding).paddingRight, 10) + lockPaddingValue + 'px';
        }
        // с помощью parseInt и window.getComputedStyle()
        // получаем текущее значение paddingRight элементов и добавляем к ним ширину скролла
        body.style.paddingRight = parseInt(window.getComputedStyle(body).paddingRight, 10) + lockPaddingValue + 'px';
        body.classList.add('lock');

        unlock = false;
        setTimeout(function () {
            unlock = true;
        }, timeout);
    }

    function bodyUnLock() {
        setTimeout(function () {
            for (let lockPadding of lockPaddings) {
                lockPadding.style.paddingRight = parseInt(window.getComputedStyle(lockPadding).paddingRight, 10) - lockPaddingValue + 'px';
            }
            // возвращаем оригинальный paddingRight элементам
            body.style.paddingRight = parseInt(window.getComputedStyle(body).paddingRight, 10) - lockPaddingValue + 'px';
            body.classList.remove('lock');
        }, timeout);

        unlock = false;
        setTimeout(function () {
            unlock = true;
        }, timeout);
    }

    document.addEventListener('keydown', function (e) {
        if (e.code === 'Escape') {
            const modalActive = document.querySelector('.modal.opened');
            if (modalActive) {
                closeModal(modalActive);
            }
        }
    });

    (function () {
        // проверяем поддержку
        if (!Element.prototype.closest) {
            // реализуем
            Element.prototype.closest = function (css) {
                let node = this;
                while (node) {
                    if (node.matches(css)) return node;
                    else node = node.parentElement;
                }
                return null;
            };
        }
    })();
    (function () {
        // проверяем поддержку
        if (!Element.prototype.matches) {
            // определяем свойство
            Element.prototype.matches = Element.prototype.matchesSelector ||
                Element.prototype.webkitMatchesSelector ||
                Element.prototype.mozMatchesSelector ||
                Element.prototype.msMatchesSelector;
        }
    })();
});
