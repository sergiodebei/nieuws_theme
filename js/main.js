function checkit(){
    if ($(window).width() < 560) {
        $('.search-wrapper').addClass('focused');
        $('.search-input').focus();
    }
    else {
        $('.search-wrapper').removeClass('focused');
    }
}

$( document ).ready(function() {

    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').stop().animate({
                scrollTop: target.offset().top - 100
              }, 1000);
              return false;
            }
          }
        });
    });

    $(window).scroll(function(){
        if($(this).scrollTop() > 50) {
            $(".controllers").addClass("visible");
        } else {
            $(".controllers").removeClass("visible");
        }
    });

     $(".totop").click(function(event){
        event.preventDefault();
        $("html, body").animate({scrollTop: 0}, 600);
    });


    if($('form').length){

        var searchwrapper = $('.search-wrapper');
        var searchInput = $('.search-input');

        
        $('body').click(function(e){
            var target = $(e.target);
                if (target.parents().andSelf().is('.search')){
                    searchwrapper.addClass('focused');
                    searchInput.focus();
                }else{
                    if ($(window).width() > 560) {
                        searchwrapper.removeClass('focused');
                    }
                }
        });


      // let searchWrapper = document.querySelector('.search-wrapper'),
      //     searchInput = document.querySelector('.search-input');

      // document.addEventListener('click', (e) => {
      //   if (~e.target.className.indexOf('search')) {
      //     searchWrapper.classList.add('focused');
      //     searchInput.focus();
      //   } else {
      //     searchWrapper.classList.remove('focused');
      //   }
      // });
    }

    checkit();

});

$(window).resize(function() {
    checkit();
});

