// FAQ icon rotations
document.addEventListener('DOMContentLoaded', function () {
    const faqItems = document.querySelectorAll('.faq-item');

    if (!faqItems.length) return;

    faqItems.forEach(item => {
        const button = item.querySelector('.faq-question');
        const content = item.querySelector('.faq-answer');
        const icon = item.querySelector('.plus-icon');

        // closed on default
        content.style.display = 'none';
        button.setAttribute('aria-expanded', 'false');
        if (icon) icon.style.transform = 'rotate(0deg)';

        button.addEventListener('click', () => {
            const isExpanded = button.getAttribute('aria-expanded') === 'true';

            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.querySelector('.faq-answer').style.display = 'none';
                    otherItem.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
                    const otherIcon = otherItem.querySelector('.plus-icon');
                    if (otherIcon) otherIcon.style.transform = 'rotate(0deg)'; // closing prev question
                }
            });

            if (isExpanded) {
                content.style.display = 'none';
                button.setAttribute('aria-expanded', 'false');
                if (icon) icon.style.transform = 'rotate(0deg)'; // rotation
            } else {
                content.style.display = 'block';
                button.setAttribute('aria-expanded', 'true');
                if (icon) icon.style.transform = 'rotate(180deg)'; // rotation
            }
        });
    });
});

// swiper slide section - WIP
document.addEventListener('DOMContentLoaded', function () {

    var swiperElement = document.querySelector('.mySwiper-about');

    if (swiperElement && typeof Swiper !== 'undefined') {
        var swiperAbout = new Swiper(".mySwiper-about", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            effect: "fade",
            fadeEffect: {
                crossFade: true
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    }
});