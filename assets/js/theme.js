/* Fundación Casanare — interacciones ligeras (sin dependencias) */
(function () {
	var root = document.documentElement;

	// Sombra del encabezado al hacer scroll
	var header = document.querySelector('.fc-header');
	if (header) {
		var onScroll = function () { header.classList.toggle('is-scrolled', window.scrollY > 8); };
		window.addEventListener('scroll', onScroll, { passive: true });
		onScroll();
	}

	// Aparición suave de secciones
	if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
		var targets = document.querySelectorAll('.fc-section .wp-block-columns, .fc-section > .wp-block-group, .fc-line, .fc-mosaic, .fc-news, .fc-line-section');
		var io = new IntersectionObserver(function (entries) {
			entries.forEach(function (e) {
				if (e.isIntersecting) { e.target.classList.add('is-visible'); io.unobserve(e.target); }
			});
		}, { rootMargin: '0px 0px -8% 0px' });
		targets.forEach(function (t) {
			if (t.getBoundingClientRect().top > window.innerHeight) { t.classList.add('fc-reveal'); io.observe(t); }
		});
	}
})();
