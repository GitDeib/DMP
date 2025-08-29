import './bootstrap';

import 'flowbite';

import Alpine from 'alpinejs';
import { Carousel } from 'flowbite';

window.Alpine = Alpine;

Alpine.start();

// after imports & Alpine.start() in resources/js/app.js
document.addEventListener('DOMContentLoaded', () => {
    const carouselEl = document.getElementById('default-carousel');
    if (!carouselEl) return;

    const slides = Array.from(carouselEl.querySelectorAll('[data-carousel-item]'));
    const dots = Array.from(carouselEl.querySelectorAll('[data-carousel-slide-to]'));

    // initial index from dots (Flowbite updates aria-current on the active dot)
    let currentIndex = dots.findIndex(d => d.getAttribute('aria-current') === 'true');
    if (currentIndex === -1) currentIndex = 0;

    const LOCK_MS = 900;            // prevents multiple triggers while animating
    let locked = false;

    const lock = () => {
        locked = true;
        setTimeout(() => (locked = false), LOCK_MS);
    };

    // Keep currentIndex in sync when user clicks indicators (or when Flowbite updates aria-current)
    // 1) click listeners
    dots.forEach((dot, idx) => {
        dot.addEventListener('click', () => {
            currentIndex = idx;
            lock();
        });
    });

    // 2) MutationObserver to catch aria-current changes (keeps in sync if controls/arrows used)
    dots.forEach((dot, idx) => {
        const mo = new MutationObserver((mutations) => {
            for (const m of mutations) {
                if (m.attributeName === 'aria-current') {
                    if (dot.getAttribute('aria-current') === 'true') {
                        currentIndex = idx;
                    }
                }
            }
        });
        mo.observe(dot, { attributes: true });
    });

    // goTo uses Flowbite's own indicators to change slide
    function goTo(index) {
        if (locked) return;
        if (dots[index]) {
            dots[index].click(); // let Flowbite handle the animation & state
            // optimistic update (observer or click handler will keep this in sync)
            currentIndex = index;
        } else {
            // fallback if no indicators are present
            slides.forEach((s, i) => s.classList.toggle('hidden', i !== index));
            currentIndex = index;
        }
        lock();
    }

    // Only respond to wheel when carousel is visible in viewport (prevent interfering with other page scroll)
    function carouselIsVisible() {
        const rect = carouselEl.getBoundingClientRect();
        return rect.top < window.innerHeight && rect.bottom > 0;
    }

    // wheel handler: one scroll gesture = one slide
    window.addEventListener('wheel', (e) => {
        if (locked) return;
        if (!carouselIsVisible()) return; // ignore if not visible

        if (e.deltaY > 0) {
            // down -> next
            const next = (currentIndex + 1) % slides.length;
            goTo(next);
        } else {
            // up -> prev
            const prev = (currentIndex - 1 + slides.length) % slides.length;
            goTo(prev);
        }
    }, { passive: true });
});
