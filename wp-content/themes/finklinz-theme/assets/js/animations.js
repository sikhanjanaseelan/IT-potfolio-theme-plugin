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
/* =========================================================
   HOMEPAGE PORTFOLIO FILTER
   ========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    const filters = document.querySelectorAll('.work-filter');
    const projects = document.querySelectorAll('.work-card');

    if (!filters.length || !projects.length) {
        return;
    }

    filters.forEach(function (filter) {

        filter.addEventListener('click', function () {

            const selected = this.dataset.filter;

            filters.forEach(function (button) {
                button.classList.remove('is-active');
            });

            this.classList.add('is-active');

            projects.forEach(function (project) {

                const category = project.dataset.category;

                if (
                    selected === 'all' ||
                    selected === category
                ) {
                    project.classList.remove('is-hidden');
                } else {
                    project.classList.add('is-hidden');
                }

            });

        });

    });

});