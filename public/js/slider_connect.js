document.addEventListener('DOMContentLoaded', () => {
    // инициализация слайдера

    let swiped;

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        swiped = true;
    } else {
        swiped = false;
    }

    new ItcSimpleSlider('.itcss', {
        swipe: swiped,
    });
});
