//	Header scroll Height (Background change)
$(window).scroll(function() {

	if ($(document).scrollTop() > 250	) {

		$(".navbar").addClass("customNav");
	} else {

		$(".navbar").removeClass("customNav");
	}
});


// Dropdown menu
$(document).ready(function() {
    $(".hidden-menu").click(function() {
        $(".sub-drop").toggleClass("sub-menu sub-menu-small");
    });
    $(".hidden-menu2").click(function() {
        $(".sub-drop2").toggleClass("sub-menu2 sub-menu2-small");
    });
});


// Add class active
$(document).ready(function() {
	var url = window.location.href;
	$('.myNav-nav a[href="url"]').parent().addClass('active');
	$('.myNav-nav a').filter(function() {
		return this.href == url;
	}).parent().addClass('active');
});




// AOS Init
// $(document).ready(function() {
//   AOS.init({
//       duration: 1000,
//     });
// });


// owl carousel
$('.carousel-testimonial').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


// <!-- Initialize Swiper -->
//  var swiper = new Swiper(".mySwiper", {
//    slidesPerView: 5,
//    // spaceBetween: 10,
//    slidesPerGroup: 1,
//    loop: true,
//    speed:1000,
//    autoplay:true,
//    autoplaySpeed:2000,
//    autoplayTimeout:2000,
//    centeredSlides: true,
//    loopFillGroupWithBlank: true,
//    navigation: {
//      nextEl: ".swiper-button-next",
//      prevEl: ".swiper-button-prev",
//    },
//  });



// owl carousel-new
$('.carousel-main').owlCarousel({
	items: 3,
	loop: true,
	autoplay: true,
	autoplayTimeout: 3000,
	autoplaySpeed:1500,
	margin: 20,
	nav: true,
	dots: false,
	navText: ['<span class="fas fa-chevron-left fa-2x"></span>','<span class="fas fa-chevron-right fa-2x"></span>'],
	responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

//counter
$('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
          
          //chnage count up speed here
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

// Clock timer
function showTime(){
 var date = new Date();
 var h = date.getHours();
 var m = date.getMinutes();
 var s = date.getSeconds();
 var session = "AM";

if(h == 0){
    h = 12;
 }
 if(h > 12){
    h = h - 12;
    session = "PM";
 }
 h = (h < 9) ? "0" + h : h;
 m = (m < 9) ? "0" + m : m;
 s = (s < 9) ? "0" + s : s;


document.getElementById("MyClockDisplay").innerHTML = h + ":" + m + ":" + s + " " + session;
setTimeout(showTime,1000);
}
showTime ();

