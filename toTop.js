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