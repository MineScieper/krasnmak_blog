document.addEventListener('DOMContentLoaded', () => {
    // Функционал бургер-меню
    const burger_button = document.querySelector('.burger-icon');
    const cross_button = document.querySelector('.cross-icon');
    const header_menu = document.querySelector('.header-menu');
    const html_body = document.querySelector('body');
    let nav_links = document.querySelectorAll('.nav-link');
    const header_background = document.querySelector('.header-background');

    burger_button.addEventListener("click", toggle_header_menu_active);
    cross_button.addEventListener("click", toggle_header_menu_active);

    function toggle_header_menu_active() {
        header_menu.classList.toggle('active');
        burger_button.classList.toggle('visible');
        cross_button.classList.toggle('visible');
        html_body.classList.toggle('lock');
        header_background.classList.toggle('active');
    }

    for (let link of nav_links) {
        link.addEventListener("click", remove_classes);
    }

    function remove_classes() {
        header_menu.classList.remove('active');
        html_body.classList.remove('lock');
        burger_button.classList.add('visible');
        cross_button.classList.remove('visible');
        header_background.classList.remove('active');
    }


    // инициализация слайдера
    let swiped = false;
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        swiped = true;
    }
    new ItcSimpleSlider('.itcss', {
        swipe: swiped,
        indicators: false,
    });
});
