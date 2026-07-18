const header = document.querySelector('#site-header');
addEventListener('scroll', () => header.classList.toggle('stuck', scrollY > 30));

const observer = new IntersectionObserver(entries => entries.forEach(entry => {
  if (entry.isIntersecting) {
    entry.target.classList.add('show');
    observer.unobserve(entry.target);
  }
}), { threshold: .12 });

document.querySelectorAll('.reveal').forEach(element => observer.observe(element));
