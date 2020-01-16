const slider = document.querySelector('.slider');
const slides = Array.from(slider.children);
const currSlide = slider.querySelector('.currSlide');
const nextBtn = document.querySelector('#next');
const prevBtn = document.querySelector('#prev');
const points = document.querySelector('.points');
const pointsDots = Array.from(points.children);
const slideWidth = slides[0].getBoundingClientRect().width;

//arrange slides
const setSlidePosition = (slide, index) => {
  slide.style.left = slideWidth * index + 'px';
};

slides.forEach(setSlidePosition);

const moveToSlide = (slider, currSlide, targetSlide) => {
  slider.style.transform = 'translateX(-' + targetSlide.style.left + ')';

  // if (currSlide == slides[2]){
  //   slides[2].nextElementSibling = slides[0];
  // }else if (currSlide == slides[0]){
  //   slides[0].previousElementSibling = slides[2];
  // } 

  currSlide.classList.remove('currSlide');
  targetSlide.classList.add('currSlide');
}

const updateDots = ( currDot, targetDot) => {
  currDot.classList.remove('currSlide');
  targetDot.classList.add('currSlide');
}

//move left
prevBtn.addEventListener('click', e => {
  const currSlide = slider.querySelector('.currSlide');
  const prevSlide = currSlide.previousElementSibling;
  const currDot = points.querySelector('.currSlide');
  const prevDot = currDot.previousElementSibling;

  moveToSlide(slider, currSlide, prevSlide);
  updateDots(currDot, prevDot);
});

//move right
nextBtn.addEventListener('click', e => {
  const currSlide = slider.querySelector('.currSlide');
  const nextSlide = currSlide.nextElementSibling;
  const currDot = points.querySelector('.currSlide');
  const nextDot = currDot.nextElementSibling;

  moveToSlide(slider, currSlide, nextSlide);
  updateDots(currDot, nextDot);
});

//move points
points.addEventListener('click', e => {
  //which dot clicked
 const targetDot = e.target.closest('li');

 if(!targetDot) return;

  const currSlide = slider.querySelector('.currSlide');
  const currDot = pointsDots.querySelector('.currSlide');
  const targetIndex = points.findIndex(point => point === targetDot);
  const targetSlide = slides[targetIndex];
  
  moveToSlide(slider, currSlide, targetSlide);
  updateDots(currDot, targetDot);
});