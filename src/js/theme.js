// Add all JS development here
jQuery(function ($) {
  $(document).ready(function () {

      //Navbar Scrollspy 
      // $(window).scroll(function () {
      //     var scroll = $(window).scrollTop();
      //     if (scroll > 80) {
      //         $(".inner").addClass("affix");
      //     } else {
      //         $(".inner").removeClass("affix");
      //     }
      // });

      //Navbar Close after click
      $(document).on('click', function () {
          $('.navbar .collapse').collapse('hide');
      })

      //Mobile Menu hamburger
      // $(".hamburger").click(function () {
      //     $(this).toggleClass("is-active");
      // })

      $(".latest-news-carosal").owlCarousel({
        loop: false,
        // margin: 10,
        nav: false,
        autoplay: true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        dots: true,
        responsive: {
          0: {
            items: 1,
            margin: 15,
          },
          600: {
            items: 1,
            margin: 30,
          },
          1000: {
            items: 3,
            margin: 30,
          },
        },
      });







      document.querySelectorAll('.button').forEach(button => {

        let div = document.createElement('div'),
            letters = button.textContent.trim().split('');
    
        function elements(letter, index, array) {
    
            let element = document.createElement('span'),
                part = (index >= array.length / 2) ? -1 : 1,
                position = (index >= array.length / 2) ? array.length / 2 - index + (array.length / 2 - 1) : index,
                move = position / (array.length / 2),
                rotate = 1 - move;
    
            element.innerHTML = !letter.trim() ? '&nbsp;' : letter;
            element.style.setProperty('--move', move);
            element.style.setProperty('--rotate', rotate);
            element.style.setProperty('--part', part);
    
            div.appendChild(element);
    
        }
    
        letters.forEach(elements);
    
        button.innerHTML = div.outerHTML;
    
        button.addEventListener('mouseenter', e => {
            if(!button.classList.contains('out')) {
                button.classList.add('in');
            }
        });
    
        button.addEventListener('mouseleave', e => {
            if(button.classList.contains('in')) {
                button.classList.add('out');
                setTimeout(() => button.classList.remove('in', 'out'), 950);
            }
        });
    
    });
    
      
  });
});