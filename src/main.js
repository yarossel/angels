const buttons = document.querySelectorAll('[data-carousel-btn]');
const masks = document.querySelector('[data-slider]').querySelectorAll('.character-mask');

buttons.forEach(button => {
  button.addEventListener('click', () => {
    const offset = button.dataset.carouselBtn === 'next' ? 1 : -1;
    const slides = button
    .closest('[data-carousel]')
    .querySelector('[data-slides]');
    const slider = button.closest('[data-carousel]').querySelector('[data-slider]');

    const activeSlide = slides.querySelector('[data-active]');
    const activeMask = slider.querySelector('[data-active]');
    let newIndex = [...slides.children].indexOf(activeSlide) + offset;
    if (newIndex < 0) newIndex = slides.children.length - 1;
    if (newIndex >= slides.children.length) newIndex = 0;
    delete activeSlide.dataset.active;
    delete activeMask.dataset.active;

    slides.children[newIndex].dataset.active = true;
    masks[newIndex].dataset.active = true;

    activeBorder.style.left = `${masks[newIndex].offsetLeft}px`; 
  })
})

const activeBorder = document.querySelector('.active-border');

masks.forEach((mask, index) => {
  mask.addEventListener('click', function() {
    const slides = mask.closest('[data-carousel').querySelector('[data-slides]');
    const slider = document.querySelector('[data-slider');

    const relativeLeft = this.offsetLeft;
    activeBorder.style.left = `${relativeLeft}px`;

    const activeSlide = slides.querySelector('[data-active]');
    const activeMask = slider.querySelector('[data-active]');
    delete activeMask.dataset.active;
    delete activeSlide.dataset.active;
    mask.dataset.active = true;
    slides.children[index].dataset.active = true;
  })
})

window.addEventListener('DOMContentLoaded', () => { 
  const activeMask = document.querySelector('.character-mask[data-active]');

  if (activeMask) { 
    activeBorder.style.left = `${activeMask.offsetLeft}px`; 
  } 
});

