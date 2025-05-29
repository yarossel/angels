const buttons = document.querySelectorAll('[data-carousel-btn]');

buttons.forEach(button => {
  button.addEventListener('click', () => {
    const offset = button.dataset.carouselBtn === 'next' ? 1 : -1;
    const slides = button
    .closest('[data-carousel]')
    .querySelector('[data-slides]')

    const dots = button.closest('[data-carousel]').querySelector('[data-dots');

    const activeSlide = slides.querySelector('[data-active]');
    const activeDot = dots.querySelector('[data-dot-active]');
    let newIndex = [...slides.children].indexOf(activeSlide) + offset;
    if (newIndex < 0) newIndex = slides.children.length - 1;
    if (newIndex >= slides.children.length) newIndex = 0;

    slides.children[newIndex].dataset.active = true;
    delete activeSlide.dataset.active
    dots.children[newIndex].dataset.dotActive = true;
    delete activeDot.dataset.dotActive
  })
})

