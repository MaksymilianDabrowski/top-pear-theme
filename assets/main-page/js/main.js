document.addEventListener('DOMContentLoaded', function () {

    // lucide dec
    if (typeof lucide !== 'undefined') {
        lucide.createIcons({
            icons: lucide.icons,
            attrs: { 'stroke-width': 1.5, 'class': "lucide-icon" }
        });
    }

    // faq dec
    const faqItems = document.querySelectorAll('.faq-item');

    if (faqItems.length) {
        faqItems.forEach((item, index) => {
            const button = item.querySelector('.faq-question');
            const content = item.querySelector('.faq-answer');

            if (!button || !content) return;

            if (index === 0) {
                content.style.display = 'block';
                button.setAttribute('aria-expanded', 'true');
            } else {
                content.style.display = 'none';
                button.setAttribute('aria-expanded', 'false');
            }

            button.onclick = function (e) {
                e.preventDefault();
                e.stopPropagation();


                const isExpanded = button.getAttribute('aria-expanded') === 'true';

                faqItems.forEach(otherItem => {
                    const otherContent = otherItem.querySelector('.faq-answer');
                    const otherButton = otherItem.querySelector('.faq-question');

                    if (otherItem === item) {
                        if (isExpanded) {
                            otherContent.style.display = 'none';
                            otherButton.setAttribute('aria-expanded', 'false');
                        } else {
                            otherContent.style.display = 'block';
                            otherButton.setAttribute('aria-expanded', 'true');
                        }
                    } else {
                        otherContent.style.display = 'none';
                        otherButton.setAttribute('aria-expanded', 'false');
                    }
                });
            };
        });
    }

    // swiper decs
    var swiperElement = document.querySelector('.mySwiper-about');
    if (swiperElement && typeof Swiper !== 'undefined') {
        new Swiper(".mySwiper-about", {
            slidesPerView: 1, spaceBetween: 0, loop: true,
            effect: "fade", fadeEffect: { crossFade: true },
            autoplay: { delay: 4000, disableOnInteraction: false },
            navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        });
    }
});