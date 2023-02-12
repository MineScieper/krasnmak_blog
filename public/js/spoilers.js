document.addEventListener('DOMContentLoaded', function () {
    const spoilersArray = document.querySelectorAll('[data-spoiler]');
    if (spoilersArray.length > 0) {
        initSpoilers(spoilersArray);
    }


    function initSpoilers(spoilers) {
        for (let spoiler of spoilers) {
            spoiler.classList.add('_init');
            initSpoilerBody(spoiler);
            spoiler.firstElementChild.addEventListener('click', setSpoilerAction);
        }
    }
    function initSpoilerBody(spoiler, hideSpoilerBody = true) {
        const spoilerTitle = spoiler.firstElementChild;
        if (hideSpoilerBody) {
            if (!spoilerTitle.classList.contains('_active')) {
                spoilerTitle.nextElementSibling.hidden = true;
            }
        } else {
            spoilerTitle.nextElementSibling.hidden = false;
        }
    }
    function setSpoilerAction(e) {
        const el = e.target;
        const spoilerTitle = el.closest('[data-spoiler]').firstElementChild;
        // const spoilerTitleText = spoilerTitle.textContent;
        // console.log(`spoilerTitle: ${spoilerTitleText}`);
        const spoiler = el.closest('[data-spoiler]');
        if (!spoiler.querySelectorAll('._slide').length) {
            if (!spoilerTitle.classList.contains('_active')) {
                hideSpoilersBody(spoilerTitle);
            }
            spoilerTitle.classList.toggle('_active');
            _slideToggle(spoilerTitle.nextElementSibling, 500);
        }
    }
    function hideSpoilersBody(spoilerTitle) {
        if (spoilerTitle.classList.contains('_active')) {
            spoilerTitle.classList.remove('_active');
            _slideUp(spoilerTitle.nextElementSibling, 500);
        }
    }

    let _slideUp = (target, duration = 500) => {
        if (!target.classList.contains('_slide')) {
            target.classList.add('_slide');
            target.style.transitionProperty = 'height, margin, padding';
            target.style.transitionDuration = duration + 'ms';
            target.style.height = target.offsetHeight + 'px';
            target.offsetHeight;
            target.style.overflow = 'hidden';
            target.style.height = 0;
            target.style.paddingTop = 0;
            target.style.paddingBottom = 0;
            target.style.marginTop = 0;
            target.style.marginBottom = 0;
            window.setTimeout(() => {
                target.hidden = true;
                target.style.removeProperty('height');
                target.style.removeProperty('padding-top');
                target.style.removeProperty('padding-bottom');
                target.style.removeProperty('margin-top');
                target.style.removeProperty('margin-bottom');
                target.style.removeProperty('overflow');
                target.style.removeProperty('transition-duration');
                target.style.removeProperty('transition-property');
                target.classList.remove('_slide');
            }, duration);
        }
    }
    let _slideDown = (target, duration = 500) => {
        if (!target.classList.contains('_slide')) {
            target.classList.add('_slide');
            if (target.hidden) {
                target.hidden = false;
            }
            let height = target.offsetHeight;
            target.style.overflow = 'hidden';
            target.style.height = 0;
            target.style.paddingTop = 0;
            target.style.paddingBottom = 0;
            target.style.marginTop = 0;
            target.style.marginBottom = 0;
            target.offsetHeight;
            target.style.transitionProperty = 'height, margin, padding';
            target.style.transitionDuration = duration + 'ms';
            target.style.height = height + 'px';
            target.style.removeProperty('padding-top');
            target.style.removeProperty('padding-bottom');
            target.style.removeProperty('margin-top');
            target.style.removeProperty('margin-bottom');
            window.setTimeout(() => {
                target.style.removeProperty('height');
                target.style.removeProperty('overflow');
                target.style.removeProperty('transition-duration');
                target.style.removeProperty('transition-property');
                target.classList.remove('_slide');
            }, duration);
        }
    }
    let _slideToggle = (target, duration = 500) => {
        if (target.hidden) {
            return _slideDown(target,duration);
        } else {
            return _slideUp(target,duration);
        }
    }
});
