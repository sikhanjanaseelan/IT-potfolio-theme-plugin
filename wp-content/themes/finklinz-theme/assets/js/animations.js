document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.reveal');

    if (!elements.length || !('IntersectionObserver' in window)) {
        elements.forEach((el) => el.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('is-visible');
            obs.unobserve(entry.target);
        });
    }, {
        threshold: 0.14
    });

    elements.forEach((el) => observer.observe(el));
});
