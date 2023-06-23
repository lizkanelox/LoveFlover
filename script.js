 const sliderObj = document.querySelectorAll('.slider__obj');
 const sliderLine = document.querySelector('.slider__line');

 let count = 0;
 let width;

 function init(){
    console.log('resize');
    width = document.querySelector('.models__slider').offsetWidth;
    sliderLine.style.width = width*sliderObj.length +'px';
    sliderObj.forEach(item => {
        item.style.width = width +'px';
        item.style.height = 'auto';
    });
    sliderRoll()
 };

 window.addEventListener('resize',init);
 init();

 document.querySelector('.slider__button-right').addEventListener('click',function(){
    count++
    if (count >= sliderObj.length){
        count = 0;
    };
    sliderRoll();
 });
 document.querySelector('.slider__button-left').addEventListener('click',function(){
    count--
    if (count < 0){
        count = sliderObj.length-1;
    };
    sliderRoll();
 });

 function sliderRoll(){
    sliderLine.style.transform = 'translate(-'+count*width +"px)";
 };



 const btnUp = {
   el: document.querySelector('#toTop'),
   show() {
     this.el.classList.remove('toTop-hide');
   },
   hide() {
     this.el.classList.add('toTop-hide');
   },
   addEventListener() {
     window.addEventListener('scroll', () => {
       const scrollY = window.scrollY || document.documentElement.scrollTop;
       scrollY > 400 ? this.show() : this.hide();
     });
     document.querySelector('#toTop').addEventListener('click', function(){
       window.scrollTo({
         top: 0,
         behavior: 'smooth'
       });
     })
   }
 }
 
 btnUp.addEventListener();