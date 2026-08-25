document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('site-header');
    const toggle = document.querySelector('.nav-toggle');
    const nav = document.querySelector('.site-nav');

    const syncHeader = () => {
        if (!header) return;
        header.classList.toggle('is-scrolled', window.scrollY > 12);
    };

    syncHeader();
    window.addEventListener('scroll', syncHeader, { passive: true });

    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            const isOpen = nav.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', String(isOpen));
        });
    }
});
