

/* Please ❤ this if you like it! */


(function($) { "use strict";

	$(function() {
		var header = $(".start-style");
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();

			if (scroll >= 10) {
				header.removeClass('start-style').addClass("scroll-on");
			} else {
				header.removeClass("scroll-on").addClass('start-style');
			}
		});
	});

	//Animation

	$(document).ready(function() {
		$('body.hero-anime').removeClass('hero-anime');
	});

	//Menu On Hover

	$('body').on('mouseenter mouseleave','.nav-item',function(e){
			if ($(window).width() > 750) {
				var _d=$(e.target).closest('.nav-item');_d.addClass('show');
				setTimeout(function(){
				_d[_d.is(':hover')?'addClass':'removeClass']('show');
				},1);
			}
	});

	//Switch light/dark

	$("#switch").on('click', function () {
		if ($("body").hasClass("dark")) {
			$("body").removeClass("dark");
			$("#switch").removeClass("switched");
		}
		else {
			$("body").addClass("dark");
			$("#switch").addClass("switched");
		}
	});

  })(jQuery);

  let items = document.querySelectorAll('.carousel .carousel-item')

		items.forEach((el) => {
			const minPerSlide = 4
			let next = el.nextElementSibling
			for (var i=1; i<minPerSlide; i++) {
				if (!next) {
            // wrap carousel by using first child
            next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})


    myVid=document.getElementsByTagName("iframe");
    myVid.muted=true;


    $(document).ready( function () {
        $('#search').click(function(e){

            // localStorage.setItem("content", tempContent);
            if ($('#searchValue').val()){
                localStorage.setItem("search", $('#searchValue').val());
                window.location.href = "/search";
            } else {
                alert('Location cannot be empty')
            }
            //window.location.href = "/search";
          });

          $('#search2').click(function(e){

            // localStorage.setItem("content", tempContent);
            if ($('#searchValue2').val()){
                localStorage.setItem("search", $('#searchValue2').val());
                location.reload()
            } else {
                alert('Location cannot be empty')
            }
            //window.location.href = "/search";
          });


        var search = localStorage.getItem("search");
        if (search){
            $('#searchValue2').val(search)
            $('#searchName').html(search)
            console.log(search)
        }


});
