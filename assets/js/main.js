const header = document.querySelector('#site-header');
if (header) {
  addEventListener('scroll', () => header.classList.toggle('stuck', scrollY > 30));
}

const revealElements = document.querySelectorAll('.reveal');

if ('IntersectionObserver' in window) {
  const observer = new IntersectionObserver(entries => entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
      observer.unobserve(entry.target);
    }
  }), { threshold: .12 });

  revealElements.forEach(element => observer.observe(element));
} else {
  revealElements.forEach(element => element.classList.add('show'));
}
