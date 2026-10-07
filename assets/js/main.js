const header = document.querySelector('#site-header');
if (header) {
  const updateHeader = () => header.classList.toggle('stuck', window.scrollY > 30);
  window.addEventListener('scroll', updateHeader, { passive: true });
  updateHeader();
}
const menuButton = document.querySelector('.menu-toggle');
const menu = document.querySelector('#primary-navigation');
if (menuButton && menu) {
  const setMenu = open => {
    menu.classList.toggle('is-open', open);
    menuButton.setAttribute('aria-expanded', String(open));
    menuButton.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
  };
  menuButton.addEventListener('click', () => setMenu(menuButton.getAttribute('aria-expanded') !== 'true'));
  menu.addEventListener('click', event => { if (event.target.closest('a')) setMenu(false); });
  document.addEventListener('keydown', event => {
    if (event.key === 'Escape' && menuButton.getAttribute('aria-expanded') === 'true') {
      setMenu(false);
      menuButton.focus();
    }
  });
}
const hero = document.querySelector('.hero');
if (hero) {
  const slides = [...hero.querySelectorAll('.hero-slide')];
  const dots = [...hero.querySelectorAll('.slide-dot')];
  const controls = hero.querySelector('.slider-controls');
  const pause = hero.querySelector('.slide-pause');
  if (slides.length > 1 && controls && pause) {
    controls.hidden = false;
    let index = 0;
    let timer;
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    let paused = reducedMotion.matches;
    const showSlide = next => {
      index = (next + slides.length) % slides.length;
      slides.forEach((slide, i) => { slide.hidden = i !== index; slide.classList.toggle('is-active', i === index); });
      dots.forEach((dot, i) => { dot.classList.toggle('is-active', i === index); dot.setAttribute('aria-pressed', String(i === index)); });
    };
    const stop = () => window.clearInterval(timer);
    const start = () => {
      stop();
      if (!paused && !document.hidden && !hero.matches(':hover') && !hero.contains(document.activeElement)) timer = window.setInterval(() => showSlide(index + 1), 6500);
    };
    const updatePause = () => {
      pause.textContent = paused ? '▶' : 'Ⅱ';
      pause.setAttribute('aria-label', paused ? 'Play slideshow' : 'Pause slideshow');
      start();
    };
    hero.querySelector('.slide-prev').addEventListener('click', () => { showSlide(index - 1); start(); });
    hero.querySelector('.slide-next').addEventListener('click', () => { showSlide(index + 1); start(); });
    dots.forEach((dot, i) => dot.addEventListener('click', () => { showSlide(i); start(); }));
    pause.addEventListener('click', () => { paused = !paused; updatePause(); });
    hero.addEventListener('mouseenter', stop);
    hero.addEventListener('mouseleave', start);
    hero.addEventListener('focusin', stop);
    hero.addEventListener('focusout', () => window.setTimeout(start, 0));
    document.addEventListener('visibilitychange', start);
    reducedMotion.addEventListener('change', event => { paused = event.matches; updatePause(); });
    updatePause();
  }
}
