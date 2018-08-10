$(document).ready( function () {
  if (jQuery("#main-slider-hotel").length > 0) {
      // Main Slider
      var mainSlider = jQuery("#main-slider-hotel");

      mainSlider.find('.items').each(function(){
        var imgContainer = jQuery(this).find('.img-container');
        imgContainer.css('background-image', 'url(' + imgContainer.data('bg-img') + ')');
      });

      mainSlider.owlCarousel({
        navigation:     !1,
        singleItem:     !0,
        addClassActive: !0,
        autoPlay:       !0,
        pagination:     !1,
      });
    }
});

$(window).on('load',function(){
  $("#loading-loader").fadeOut();
})



$(document).ready(function  () {
  init();

  

});


// isotope()

function init(){
  // peace();
  // loading ();
  // sequenceSlider();
  // swiper();
  // wow();
  // FlipClock();
  owlCarousel();
  // popup();
  // switcher();
  ftext();
  // fitvid();


  owltest();

  wow();
  nav();

  back2top();
  texts();

  formvalidate();
  
  navbutton();
  typed();
  circleProgress();
  tooltip();
  circleclock();
  countup();
  countdown();
  mixitup();
  popup();

	


}

function vegasHeader(){
  


  $("#vagus-slider").vegas({
      slides: [
          { src: "img/element/parallex/bg5.jpg"},
          { src: "img/element/parallex/bg1.jpg"},
          { src: "img/element/parallex/bg3.jpg"},
          { src: "img/element/parallex/bg4.jpg"},
      ],
      preload: true,
      timer: false,
      transition: 'flash2',
      overlay: 'frameworks/vegas/overlays/02.png',
      animation: [ 'kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight' ]
  });
  

  $("#vagus-slider-texi").vegas({
      slides: [
          { src: "img/rupiza/taxi/bg.jpg"},
          { src: "img/rupiza/taxi/slide1.jpg"},
          { src: "img/rupiza/taxi/slide3.jpg"},
      ],
  });
  



  $("#vagus-rest").vegas({
      slides: [
          { src: "img/rupiza/rest/bg2.jpg"},
          { src: "img/rupiza/rest/bg3.jpg"},
          { src: "img/rupiza/rest/bg4.jpg"},
          { src: "img/rupiza/rest/bg1.jpg"},
      ],
      preload: true,
      timer: false,
      transition: 'flash2',
      animation: [ 'kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight' ]
  });
  





  $("#vagus-video").vegas({
      slides: [
          // { src: "images/slider/iconimage.jpg"},
          { src: "videos/video-banner-poster.jpg",
          video: {
          src: [
            'videos/deskwork.webm'
          ],
          
          }
      }
      ],
      slide: 2,
      preload: true,
      timer: true,
      overlay: 'frameworks/vegas/overlays/08.png',
      transition: 'random',
  });


}














function popup(){
    $('.gallery').each(function(){
    $(this).magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery:{
            enabled: true
        },
        image: {
            titleSrc: function (item){
                return item.el.attr('captions');
            }
        },
    });
});
  $('.popup-gallery').each(function(){
    $(this).magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery:{
            enabled: true
        },
        image: {
            titleSrc: function (item){
                return item.el.attr('captions');
            }
        },
    });
});
}



var fselector = 0;
var work_grid = $("#work-grid, #isotope");

function isotope(){
    (function($){
     "use strict";
     var isotope_mode;
     if (work_grid.hasClass("masonry")){
         isotope_mode = "masonry";
     } else{
         isotope_mode = "fitRows"
     }
     
     $(".filter").click(function(){
         $(".filter").removeClass("active");
         $(this).addClass("active");
         fselector = $(this).attr('data-filter');
         
         work_grid.isotope({
             itemSelector: '.current',
             layoutMode: isotope_mode,
             filter: fselector
         });
         return false;
     });
        
     if (window.location.hash) {
         $(".filter").each(function(){
             if ($(this).attr("data-filter") == "." + window.location.hash.replace("#", "")) {
                 $(this).trigger('click');
                 
                 $("html, body").animate({
                     scrollTop: $("#portfolio").offset().top
                 });
                 
             }
         });
     }

     work_grid.imagesLoaded(function(){
         work_grid.isotope({
             itemSelector: '.current',
             layoutMode: isotope_mode,
             filter: fselector
         });
     });
        
        
    })(jQuery);
}





function staller() {
	$(window).stellar({
    responsive:true
  });
	// body...
}

function charts() {


	new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart-element',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2008', a: 00 ,b: 0 },
    { year: '2009', a: 10, b: 5 },
    { year: '2010', a: 5, b: 10 },
    { year: '2011', a: 5, b: 15 },
    { year: '2012', a: 20, b: 30 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['a','b'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value'],
  resize: true,
  colors: ['#0b62a4','#D58665','#37619d','#fefefe','#A87D8E','#2D619C','#2D9C2F']
});
	// body...
}










function charts1() {


	new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'mysecoundchart-element',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2008', a: 20,b: 5 },
    { year: '2009', a: 10,b: 10 },
    { year: '2010', a: 5 ,b: 15},
    { year: '2011', a: 5 ,b: 20},
    { year: '2012', a: 20,b:  25},
    { year: '2013', a: 10,b: 30 },
    { year: '2014', a: 5 ,b: 31},
    { year: '2015', a: 5 ,b:32},
    { year: '2016', a: 20,b: 33 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['a','b'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['series A','series B'],
  resize: true,
  grid:false,

});
	// body...
}




function charts2() {


	new Morris.Donut({
  // ID of the element in which to draw the chart.
  element: 'mythirdchart-element',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    {label: "Download Sales", value: 12},
    {label: "In-Store Sales", value: 30},
    {label: "Mail-Order Sales", value: 20}
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value'],
  resize: true
});
	// body...
}

// ***********************video player***************



function countdown(){
	
	// src: http://keith-wood.name/countdown.html
	layout = $('.timer').html();
	var newYear = new Date(); 
	newYear = new Date(newYear.getFullYear() + 1, 1 - 1, 1); 
	$('.timer').countdown({until: newYear, layout: layout});
	// $('.timer').countdown({since: new Date(2014, 12-1, 25)});
	// $(newYear).countdown({until: liftoffTime, format: 'dHMS'});
	 
}



function countup(){
  $('.countups').counterUp({
        delay: 10,
        time: 1000
    });
}





function circleclock(){
	$(".TimeCircles").TimeCircles({
		
		animation: "smooth",
		circle_bg_color: "#fff",
		fg_width: 0.03,
		bg_width: 0.5,
		text_size: 0.07,

		time: {
            Days: {
                show: true,
                text: "Days",
                color: "#fff"
            },
            Hours: {
                show: true,
                text: "Hours",
                color: "#fff"
            },
            Minutes: {
                show: true,
                text: "Minutes",
                color: "#fff"
            },
            Seconds: {
                show: true,
                text: "Seconds",
                color: "#fff"
            }
        }

	
	});
}



function tooltip () {
	$('#tooltip1').tooltip();
	$('#tooltip2').tooltip();
	$('#tooltip3').tooltip();
	$('#tooltip4').tooltip();
	// body...
	$('#tooltip11').tooltip();
	$('#tooltip12').tooltip();
	$('#tooltip13').tooltip();
	$('#tooltip14').tooltip();
	// body...




	$('#popover1').popover();
	$('#popover2').popover();
	$('#popover3').popover();
	$('#popover4').popover();
	

	$('#popover11').popover();
	$('#popover12').popover();
	$('#popover13').popover();
	$('#popover14').popover();
}
function circleProgress(){
	$('.circle').circleProgress({
    	value: 0.68,
    	size: 170,
      thickness:5,
      
    	fill: {
            gradient: ["#fff", "#fff","#fff"]
        }
		}).on('circle-animation-progress', function(event, progress) {
	    $(this).find('strong').html(parseInt(68 * progress) + '<i style="color:white">%</i>');
});
	$('.circle2').circleProgress({
    	value: 0.89
		}).on('circle-animation-progress', function(event, progress) {
	    $(this).find('strong').html(parseInt(89 * progress) + '<i style="color:white">%</i>');
});

	$('.circle3').circleProgress({
    	value: 0.41
		}).on('circle-animation-progress', function(event, progress) {
	    $(this).find('strong').html(parseInt(41 * progress) + '<i style="color:white">%</i>');
});


	$('.circle4').circleProgress({
    	value: 0.99
		}).on('circle-animation-progress', function(event, progress) {
	    $(this).find('strong').html(parseInt(99 * progress) + '<i style="color:white">%</i>');
});
}


function typed () {
  // src: https://github.com/mattboldt/typed.js/
  $('.type-writer .type-here').typed({
        strings: ["AWESOME", "UNIQUE", "RUPIZA"],
        typeSpeed: 70,
        backDelay: 2000,
        loop: true,
      });
 // src: https://github.com/mattboldt/typed.js/
  




  $('.type-slider .type-here-slider').typed({
        strings: ["WE ARE AWESOME", "WE ARE UNIQUE", "WE ARE RUPIZA"],
        typeSpeed: 70,
        backDelay: 2000,
        loop: true,
      });





  $('.type-slider-rest .type-here-slider-rest').typed({
        strings: ["WE ARE AWESOME", "WE ARE UNIQUE", "WE ARE RUPIZA"],
        typeSpeed: 70,
        backDelay: 2000,
        loop: true,
      });



  $('.type-slider-poto .photo-graphy').typed({
        strings: ["Nature", "Life", "Feelings"],
        typeSpeed: 70,
        backDelay: 2000,
        loop: true,
      });




}





function navbutton(){

	$('#nav-toggle').on('click', function(e){
		// alert(e)
		e.preventDefault();
		if($(this).hasClass('active')) {
			$(this).removeClass('active');
		} else {
			$(this).addClass('active');

		}
	});

}


function formvalidate(){
	$('#myForm').validator()
}






function texts() {
	$('.fastor-info > div').textillate({ 
           loop:true, 
           in:{effect:'flipInY'}, 
           out:{effect:'flipOutY', reverse:true}
      });
	// body...
}


// function peace(){
// paceOptions = {
//   ajax: false, // disabled
//   document: true, // disabled
//   eventLag: false, // disabled
//   elements: {
//     selectors: ['.loading']
//   }
// };
// }




// function loading() {
//       Pace.on("start", function(){
//         $(".paceDiv").show();
//     });

//     Pace.on("done", function(){
//         $(".paceDiv").hide();
//     });
//   // body...
// }





function back2top(){
  // height -> scrollTop > height.


  $(window).scroll(function(){
      scrollTop = $(this).scrollTop();
      height = $(window).height();
      element = $("#backtotop");
      // display 
      if(scrollTop > height) {
        element.fadeIn('slow');
      } else {
        element.fadeOut('slow');
      }
  });

  

  scrollTop = $(window).scrollTop();
  height = $(window).height();
  element = $("#backtotop");

  if(scrollTop > height) {
    element.fadeIn();
  } else {
    element.fadeOut();
  }


  $('#backtotop').click(function(){
    $('html, body').animate({scrollTop: 0}, 800);
  });


}




// Fit text function 

function ftext() {
    $("#fittext1").fitText(1.1, { minFontSize: '10px', maxFontSize: '40px' });
    $("#fittext2").fitText(1.1, { minFontSize: '5px', maxFontSize: '30px' });
    $("#fittext3").fitText(1.1, { minFontSize: '20px', maxFontSize: '50px' });
    $("#fittext4").fitText(1.1, { minFontSize: '20px', maxFontSize: '50px' });
    $("#fittext5").fitText(1.0, { minFontSize: '20px', maxFontSize: '50px' });
    $("#fittext6").fitText(1.1, { minFontSize: '35px', maxFontSize: '65px' });
    $("#fittext7").fitText(1.1, { minFontSize: '35px', maxFontSize: '65px' });
    $("#fittext8").fitText(1.0, { minFontSize: '20px', maxFontSize: '50px' });
    $("#fittext9").fitText(1.0, { minFontSize: '30px', maxFontSize: '65px' });
    $("#fittext10").fitText(1.0, { minFontSize: '30px', maxFontSize: '50px' });
    $("#fittext11").fitText(1.0, { minFontSize: '30px', maxFontSize: '50px' });
    $("#fittext12").fitText(1.0, { minFontSize: '30px', maxFontSize: '65px' });
    $("#fittext13").fitText(1.1, { minFontSize: '20px', maxFontSize: '45px' });
    $("#fittext14").fitText(1.0, { minFontSize: '30px', maxFontSize: '65px' });
    $("#fittext15").fitText(1.0, { minFontSize: '30px', maxFontSize: '80px' });
    $("#fittext16").fitText(1.0, { minFontSize: '30px', maxFontSize: '120px' });
    $("#fittext17").fitText(1.0, { minFontSize: '30px', maxFontSize: '80px' });
    $("#fittext18").fitText(1.0, { minFontSize: '30px', maxFontSize: '80px' });
    $("#fittext19").fitText(1.0, { minFontSize: '30px', maxFontSize: '80px' });
    $("#fittext20").fitText(1.0, { minFontSize: '30px', maxFontSize: '100px' });
    $("#fittext21").fitText(1.0, { minFontSize: '30px', maxFontSize: '80px' });
    $("#fittext22").fitText(1.0, { minFontSize: '30px', maxFontSize: '80px' });
}


function nav(){
  


  $('#nav').onePageNav({
    currentClass: 'active',
    changeHash: false,
    scrollSpeed: 1500,
    scrollThreshold: 0.5,
    filter: '',
    // easing: 'swing',
    begin: function() {
        //I get fired when the animation is starting
    },
    end: function() {
        //I get fired when the animation is ending
    },
    scrollChange: function($currentListItem) {
        //I get fired when you enter a section and I pass the list item of the section
    }
});



// $('#nav').onePageNav({
//     begin: function() {
//         //Hack so you can click other menu items after the initial click
//         $('body').append('<div id="device-dummy" style="height: 1px;"></div>');
//     },
//     end: function() {
//         $('#device-dummy').remove();
//     }
// });


 


 





}



function seqslider(){

	var sequenceElement = document.getElementById("slides");
	var options = {
	    autoPlayInterval: 200,
	    // Place your Sequence options here to override defaults
	    // See: http://sequencejs.com/documentation/#options
	    keyNavigation: true,
	    fadeStepWhenSkipped: false,
	    nextButton: false,
	    prevButton: false,
	    pagination: true,
	    animateStartingFrameIn: false,
	    autoPlay: true,
	    preloader: false,
  }


}

function stackslider () {
// $( '#st-stack' ).stackslider();
	// body...
}



function fitvid(){
    $("#thing-with-videos").fitVids();
}




// switcher
function switcher(){
  $('.sw-clr').click(function(){
    ths = $(this);
    fileName = 'css/' + ths.data('target') + '.css';
    // alert("hello");

    // alert(fileName)
    $('#styles').prop('href', fileName);
});
}


function mixitup () {
	$("#protfolio-box").mixItUp({
		animation: {
			duration: 580,
			effects: 'fade stagger(34ms) translateZ(560px)',
			easing: 'cubic-bezier(0.39, 0.575, 0.565, 1)'
		}
	});
}





//wow js function
function wow(){
	new WOW().init()
}






function owlCarousel(){
	$("#owltest1").owlCarousel({
		items: 1,
    itemsDesktop : [1199, 1],
    itemsDesktopSmall : [979, 1],
    itemsTablet : [768, 1],
    itemsMobile : [479, 1],


		autoPlay: false,
		responsive: true,
		responsiveRefreshRate:100,
		responsiveBaseWidth: document,
		autoHeight: false,
		pagination:false,
		navigation : true,

		navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

	});
}

function owltest(){
	$("#owltest").owlCarousel({
		items: 1,
    itemsDesktop : [1199, 1],
    itemsDesktopSmall : [979, 1],
    itemsTablet : [768, 1],
    itemsMobile : [479, 1],


		autoPlay: false,
		responsive: true,
		responsiveRefreshRate:100,
		responsiveBaseWidth: document,
		autoHeight: false,
		pagination:true,
		navigation : true,

		navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

	});
	$("#owltest3").owlCarousel({
		items: 1,
    itemsDesktop : [1199, 1],
    itemsDesktopSmall : [979, 1],
    itemsTablet : [768, 1],
    itemsMobile : [479, 1],


		autoPlay: false,
		responsive: true,
		responsiveRefreshRate:100,
		responsiveBaseWidth: document,
		autoHeight: false,
		pagination:false,
		navigation : true,

		navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

	});
	$("#owl").owlCarousel({
		items: 4,
    itemsDesktopSmall : [979, 3],
    itemsTablet : [768, 2],
    itemsMobile : [479, 1],

		autoPlay: true,
		responsive: true,
		responsiveRefreshRate:100,
		responsiveBaseWidth: document,
		autoHeight: false,

	});
	$("#caresol-5").owlCarousel({
		items:1,
    itemsDesktop : [1199, 1],
    itemsDesktopSmall : [979, 1],
    itemsTablet : [768, 1],
    itemsMobile : [479, 1],

		autoPlay: true,
		responsive: true,
		responsiveRefreshRate:100,
		responsiveBaseWidth: document,
		autoHeight: false,

	});
		$("#caresol-6").owlCarousel({
		items: 1,
    itemsDesktopSmall : [979, 1],
    itemsTablet : [768, 1],
    itemsMobile : [479, 1],

		autoPlay: true,
		responsive: true,
		responsiveRefreshRate:100,
		responsiveBaseWidth: document,
		autoHeight: false,
		navigation : true,
		navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

	});
	$("#caresol-7").owlCarousel({
		items: 3,


    itemsDesktopSmall : [979, 3],
    itemsTablet : [768, 2],
    itemsMobile : [479, 1],

		autoPlay: true,
		responsive: true,
		responsiveRefreshRate:100,
		responsiveBaseWidth: document,
		autoHeight: false,

	});

	$("#caresol-8").owlCarousel({
    items:1,
    itemsDesktop : [1199, 1],
    itemsDesktopSmall : [979, 1],
    itemsTablet : [768, 1],
    itemsMobile : [479, 1],

		autoPlay: true,
		responsive: true,
		responsiveRefreshRate:100,
		responsiveBaseWidth: document,
		autoHeight: false,
		navigation : true,
		navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

	});


	$("#caresol-8-1").owlCarousel({
		items:1,
    itemsDesktop : [1199, 1],
    itemsDesktopSmall : [979, 1],
    itemsTablet : [768, 1],
    itemsMobile : [479, 1],

		autoPlay: true,
		responsive: true,
		responsiveRefreshRate:100,
		responsiveBaseWidth: document,
		autoHeight: false,
		navigation : true,
		navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

	});
	$("#caresol-9").owlCarousel({
		items:1,
    itemsDesktop : [1199, 1],
    itemsDesktopSmall : [979, 1],
    itemsTablet : [768, 1],
    itemsMobile : [479, 1],

		autoPlay: true,
		responsive: true,
		responsiveRefreshRate:100,
		responsiveBaseWidth: document,
		autoHeight: false,
		navigation : true,
		navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],

	});

	
	$("#caresol-10").owlCarousel({
		items: 4,


    itemsDesktopSmall : [979, 3],
    itemsTablet : [768, 2],
    itemsMobile : [479, 1],

		autoPlay: true,
		responsive: true,
		responsiveRefreshRate:100,
		responsiveBaseWidth: document,
		autoHeight: false,

	});





  $("#timeline-slider").owlCarousel({
    items: 1,


    itemsDesktopSmall : [979, 1],
    itemsTablet : [768, 1],
    itemsMobile : [479, 1],

    autoPlay: true,
    responsive: true,
    responsiveRefreshRate:100,
    responsiveBaseWidth: window,
    autoHeight: false,
    pagination:true,
    navigation:true,
    navigationText : ['<i class="fa fa-angle-left" style="font-size:20px;line-height:40px"></i>','<i class="fa fa-angle-right" style="font-size:20px;line-height:40px"></i>'],

  });



  $("#carousel-wedding").owlCarousel({
    items: 3,
    itemsDesktopSmall : [979, 3],
    itemsTablet : [768, 2],
    itemsMobile : [479, 1],



    autoPlay: true,
    responsive: true,
    responsiveRefreshRate:100,
    responsiveBaseWidth: window,
    autoHeight: false,
    pagination:false,
    navigation:false,

  });


  $("#services-carousel").owlCarousel({
    items: 4,


    itemsDesktopSmall : [979, 4],
    itemsTablet : [768, 2],
    itemsMobile : [479, 1],

    autoPlay: true,
    responsive: true,
    responsiveRefreshRate:100,
    responsiveBaseWidth: window,
    autoHeight: false,
    pagination:true,
    navigation:false,

  });



  $("#app-mp-carousel").owlCarousel({
    items: 1,
    itemsDesktop : [1199, 1],
    itemsDesktopSmall : [979, 1],
    itemsTablet : [768, 1],
    itemsMobile : [479, 1],



    autoPlay: true,
    responsive: true,
    responsiveRefreshRate:100,
    responsiveBaseWidth: window,
    autoHeight: false,
    pagination:true,
    navigation:false,

  });


  $("#app-mp-carousel-people").owlCarousel({
    items: 1,
    itemsDesktop : [1199, 1],
    itemsDesktopSmall : [979, 1],
    itemsTablet : [768, 1],
    itemsMobile : [479, 1],



    autoPlay: true,
    responsive: true,
    responsiveRefreshRate:100,
    responsiveBaseWidth: window,
    autoHeight: false,
    pagination:false,
    navigation:false,

  });



  $("#app-mp-carousel-team").owlCarousel({
    items: 3,
    itemsDesktop : [1199, 3],
    itemsDesktopSmall : [979, 2],
    itemsTablet : [768, 1],
    itemsMobile : [479, 1],



    autoPlay: true,
    responsive: true,
    responsiveRefreshRate:100,
    responsiveBaseWidth: window,
    autoHeight: false,
    pagination:true,
    navigation:false,

  });


  $("#shopping-men").owlCarousel({
    items: 3,
    itemsDesktop : [1199, 3],
    itemsDesktopSmall : [979, 2],
    itemsTablet : [768, 1],
    itemsMobile : [479, 1],



    autoPlay: true,
    responsive: true,
    responsiveRefreshRate:100,
    responsiveBaseWidth: window,
    autoHeight: false,
    pagination:true,
    navigation:false,

  });


  $("#shopping-women").owlCarousel({
    items: 3,
    itemsDesktop : [1199, 3],
    itemsDesktopSmall : [979, 2],
    itemsTablet : [768, 1],
    itemsMobile : [479, 1],



    autoPlay: true,
    responsive: true,
    responsiveRefreshRate:100,
    responsiveBaseWidth: window,
    autoHeight: false,
    pagination:true,
    navigation:false,

  });



	$("#business-2-partners").owlCarousel({
		items: 4,
    itemsDesktop : [1199, 3],
    itemsDesktopSmall : [979, 2],
    itemsTablet : [768, 1],
    itemsMobile : [479, 1],



		autoPlay: true,
		responsive: true,
		responsiveRefreshRate:100,
		responsiveBaseWidth: window,
		autoHeight: false,
		pagination:true,
		navigation:false,

	});






}



function wow(){
	new WOW().init();
}

// functions






// swiper function




$('car-slider').carousel();
$('a[data-slide="prev"]').click(function () {
    $('#car-slider').carousel('prev');
});

$('a[data-slide="next"]').click(function () {
    $('#car-slider').carousel('next');
});








// ********************************************
// 
// 
//  carouesl slider customuzation  
// 
// 
// ********************************************






$(document).ready( function () {
    $('#car-slider').owlCarousel({
        // Other options go here
        // ...,
        
        items: 1,

      itemsDesktop : [1199, 1],
      itemsDesktopSmall : [979, 1],
      itemsTablet : [768, 1],
      itemsMobile : [479, 1],
    navigationText : ['<i class="fa fa-angle-left" style="font-size:20px;line-height:45px"></i>','<i class="fa fa-angle-right" style="font-size:20px;line-height:45px"></i>'],
    autoPlay: true,
    responsive: true,
    responsiveRefreshRate:100,
    responsiveBaseWidth: window,
    autoHeight: false,
    pagination:true,
    navigation : true,
    singleItem : true,
    stopOnHover: true,

    slideSpeed: 600,
    // transitionStyle : true,
    transitionStyle : "fade",
    beforeInit: function(){
          var wow = new WOW(
        {
          boxClass:     'slider-wow',      // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset:       0,          // distance to the element when triggering the animation (default is 0)
          mobile:       true,       // trigger animations on mobile devices (default is true)
          live:         true,       // act on asynchronously loaded content (default is true)
          callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
          },
          scrollContainer: null // optional scroll container selector, otherwise use window
        }
      );
      wow.init();

    },

        onInitialized: function() {
            if ($('#car-slider').children().length == 1) {
                 $('#car-slider').trigger('autoplay.stop.owl');
            }

       
        },

        addClassActive: true,
      afterMove: function(){
          var wow = new WOW(
        {
          boxClass:     'slider-wow',      // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset:       0,          // distance to the element when triggering the animation (default is 0)
          mobile:       true,       // trigger animations on mobile devices (default is true)
          live:         true,       // act on asynchronously loaded content (default is true)
          callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
          },
          scrollContainer: null // optional scroll container selector, otherwise use window
        }
      );
      wow.init();
      }

    });
});








$(document).ready( function () {
    $('#charity-slider').owlCarousel({
        // Other options go here
        // ...,
        
        items: 1,

      itemsDesktop : [1199, 1],
      itemsDesktopSmall : [979, 1],
      itemsTablet : [768, 1],
      itemsMobile : [479, 1],
    navigationText : ['<i class="fa fa-angle-left" style="font-size:60px;line-height:45px"></i>','<i class="fa fa-angle-right" style="font-size:60px;line-height:45px"></i>'],
    autoPlay: true,
    responsive: true,
    responsiveRefreshRate:100,
    responsiveBaseWidth: window,
    autoHeight: false,
    pagination:true,
    navigation : true,
    singleItem : true,
    stopOnHover: true,

    slideSpeed: 600,
    // transitionStyle : true,
    transitionStyle : "fadeOut",
    beforeInit: function(){
          var wow = new WOW(
        {
          boxClass:     'slider-wow',      // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset:       0,          // distance to the element when triggering the animation (default is 0)
          mobile:       true,       // trigger animations on mobile devices (default is true)
          live:         true,       // act on asynchronously loaded content (default is true)
          callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
          },
          scrollContainer: null // optional scroll container selector, otherwise use window
        }
      );
      wow.init();

    },

        onInitialized: function() {
            if ($('#charity-slider').children().length == 1) {
                 $('#charity-slider').trigger('autoplay.stop.owl');
            }

       
        },

        addClassActive: true,
      afterMove: function(){
          var wow = new WOW(
        {
          boxClass:     'slider-wow',      // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset:       0,          // distance to the element when triggering the animation (default is 0)
          mobile:       true,       // trigger animations on mobile devices (default is true)
          live:         true,       // act on asynchronously loaded content (default is true)
          callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
          },
          scrollContainer: null // optional scroll container selector, otherwise use window
        }
      );
      wow.init();
      }

    });
});




$(document).ready( function () {
    $('#transport-slider').owlCarousel({
        // Other options go here
        // ...,
        
        items: 1,

      itemsDesktop : [1199, 1],
      itemsDesktopSmall : [979, 1],
      itemsTablet : [768, 1],
      itemsMobile : [479, 1],
    navigationText : ['<i class="fa fa-angle-left" style="font-size:60px;line-height:45px"></i>','<i class="fa fa-angle-right" style="font-size:60px;line-height:45px"></i>'],
    autoPlay: true,
    responsive: true,
    responsiveRefreshRate:100,
    responsiveBaseWidth: window,
    autoHeight: false,
    pagination:true,
    navigation : true,
    singleItem : true,
    stopOnHover: true,

    slideSpeed: 600,
    // transitionStyle : true,
    transitionStyle : "fadeOut",
    beforeInit: function(){
          var wow = new WOW(
        {
          boxClass:     'slider-wow',      // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset:       0,          // distance to the element when triggering the animation (default is 0)
          mobile:       true,       // trigger animations on mobile devices (default is true)
          live:         true,       // act on asynchronously loaded content (default is true)
          callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
          },
          scrollContainer: null // optional scroll container selector, otherwise use window
        }
      );
      wow.init();

    },

        onInitialized: function() {
            if ($('#transport-slider').children().length == 1) {
                 $('#transport-slider').trigger('autoplay.stop.owl');
            }

       
        },

        addClassActive: true,
      afterMove: function(){
          var wow = new WOW(
        {
          boxClass:     'slider-wow',      // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset:       0,          // distance to the element when triggering the animation (default is 0)
          mobile:       true,       // trigger animations on mobile devices (default is true)
          live:         true,       // act on asynchronously loaded content (default is true)
          callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
          },
          scrollContainer: null // optional scroll container selector, otherwise use window
        }
      );
      wow.init();
      }

    });
});








// ********************************************
// 
// 
//  carouesl slider customuzation  
// 
// 
// ********************************************





// function submenu(){

// $('[data-submenu]').submenupicker();



// }








function fullpage(){
    $('#fullpage').fullpage({
        //Navigation
        menu: '#menu',
        lockAnchors: true,
        anchors:['firstPage', 'secondPage'],
        navigation: true,
        navigationPosition: 'right',
        showActiveTooltip: false,
        slidesNavigation: true,
        slidesNavPosition: 'top',

        //Scrolling
        css3: true,
        scrollingSpeed: 1000,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        scrollBar: true,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: false,
        continuousVertical: true,
        normalScrollElements: '#element1, .element2',
        scrollOverflow: false,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 10,

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: false,

        //Design
        controlArrows: true,
        verticalCentered: false,
        resize : false,
        sectionsColor : ['#ccc', '#fff'],
        paddingTop: '3em',
        paddingBottom: '10px',
        fixedElements: '#header, .footer',
        responsiveWidth: 0,
        responsiveHeight: 0,

        //Custom selectors
        sectionSelector: '.app-full-section',
        slideSelector: '.slide',

        //events
        onLeave: function(index, nextIndex, direction){},
        afterLoad: function(anchorLink, index){},
        afterRender: function(){},
        afterResize: function(){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
    });
}



// function mockups() {
//   // body...

//   $('.phonemockup').deviceMock({
//    type        : 'laptop',   // browser , phone , tablet , desktop , laptop
//    size        : '2x',        // null(1x) , 2x , 3x , 4x , 5x
//    theme       : 'black' ,    // black , white (if phone or tablet)
//    orientation : 'portrait' , // landscape , portrait (if phone or tablet)
//    // address     : '' // show on URL BAR,
//    imgPath     : 'frameworks/jquery.devicemock/img/',
// });
// }





$(document).ready(function(){
  $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
    $(this).toggleClass('open');
  });
});


$(document).ready(function(){
  $('#nav-icon1-single-pager').click(function(){
    $(this).toggleClass('open');
  });
});

$(document).ready(function() {
  setInterval(function (){
    var width = $(document).width();
    if (width > 768) {
      $(".navbar li a").click(function (e) {
        // e.stopImmediatePropagation();
      });
    }
  },50);
});












$(document).ready(function() {



$(".navbar-nav .dropdown > .dropdown-menu > .dropdown").click(function(e) {
      // alert(3)
        if($(window ).width() <= 991) {

            
              // $(this).find('.navbar-navbar').slideDown();
              // $(this).find('.navbar-navbar').slideUp();
            // $(this).find('.dropdown').hasClass('open') ? $(this).find('.dropdown').removeClass('open') : $(this).find('.dropdown').addClass('open');

        }
    });
});


function function_name(argument) {
  $('#tg-category-slider li a').on('click', function () {
        var svg1 = new Walkway({
            selector: '#ps1',
            duration: 3500
        }).draw();

        var svg2 = new Walkway({
            selector: '#ps2',
            duration: 3500
        }).draw();

        var svg3 = new Walkway({
            selector: '#ps3',
            duration: 3500
        }).draw();

        var svg4 = new Walkway({
            selector: '#ps4',
            duration: 3500
        }).draw();

        var svg5 = new Walkway({
            selector: '#ps5',
            duration: 3500
        }).draw();

        var svg6 = new Walkway({
            selector: '#ps6',
            duration: 3500
        }).draw();
    });
  // body...
}


function travel_icons() {

  $(window).on('load',function(){
  var svg1 = new Walkway({
            selector: '#ps1',
            duration: 4500
        }).draw();

        var svg2 = new Walkway({
            selector: '#ps2',
            duration: 3500
        }).draw();

        var svg3 = new Walkway({
            selector: '#ps3',
            duration: 3500
        }).draw();

        var svg4 = new Walkway({
            selector: '#ps4',
            duration: 3500
        }).draw();

        var svg5 = new Walkway({
            selector: '#ps5',
            duration: 3500
        }).draw();
})

  // body...
}














$(document).ready(function  () {
  $( ".dropdown-submenu" ).click(function(event) {
    // stop bootstrap.js to hide the parents
    event.stopPropagation();
    // hide the open children
    $( this ).find(".dropdown-submenu").removeClass('open');
    // add 'open' class to all parents with class 'dropdown-submenu'
    $( this ).parents(".dropdown-submenu").addClass('open');
    // this is also open (or was)
    $( this ).toggleClass('open');
});
});










// google maps


function initializegooglemap()
{
    var latlng = new google.maps.LatLng(51.5073509,-0.12775829999998223);
    var latlng2 = new google.maps.LatLng(51.5073509,-0.12775829999998223);
    var latlng3 = new google.maps.LatLng(44.42694198674292,8.37379484453129);
    var latlng4 = new google.maps.LatLng(51.50745440547699,-0.13199082582548538);
    var myOptions =
    {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var myOptions2 =
    {
        zoom: 15,
        center: latlng2,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var myOptions3 =
    {
        zoom: 15,
        center: latlng3,
        mapTypeId: google.maps.MapTypeId.TERRAIN
    };
    var myOptions4 =
    {
        zoom: 15,
        center: latlng4,
        mapTypeId: google.maps.MapTypeId.TERRAIN
    };

    var map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
    
    var map2 = new google.maps.Map(document.getElementById("gmap_canvas_1"), myOptions2);
    var map3 = new google.maps.Map(document.getElementById("gmap_canvas_3"), myOptions3);
    var map4 = new google.maps.Map(document.getElementById("gmap_canvas_4"), myOptions4);

    var myMarker = new google.maps.Marker(
    {
        position: latlng,
        map: map,
        title:"Pune"
   });

    var myMarker2 = new google.maps.Marker(
    {
        position: latlng2,
        map: map2,
        title:"Noida"
    });
    var myMarker3 = new google.maps.Marker(
    {
        position: latlng3,
        map: map3,
        title:"Noidas"
    });
    var myMarker4 = new google.maps.Marker(
    {
        position: latlng4,
        map: map4,
        title:"Noidass"
    });
}





function fixedOnScroll(value){

  if(value == 'auto')
  {
    value = $(window).height() - 100;
    // value += "px";
  }
  var $el = $('.fixedElement'); 
  $(window).scroll(function(e){ 
 

    var isPositionFixed = ($el.css('position') == 'fixed');
    if ($(this).scrollTop() > value && ! $el.hasClass('fixed')){ 
      $el.addClass('fixed')
      // $('.fixedElement').css({'position': 'fixed', 'top': '0px'}); 
    }
    if ($(this).scrollTop() < value && isPositionFixed)
    {
      $el.removeClass('fixed')
      // $('.fixedElement').css({'position': 'static', 'top': '0px'}); 
    } 
  });


  // 

  currentScroll = $(window).scrollTop();

  if(currentScroll > value) {
    $el.addClass('fixed');
  }
}



// isotop  profile 


$(document).ready( function() {

 $(function(){
  
  
  var $container = $('#container');
  
  $container.isotope({
    itemSelector: '.item-awesome-layout',
    masonry: {
      columnWidth: 60
    }
  })
  
  $('.item-awesome-layout').mouseover(function(){
    var $this = $(this),
        tileStyle = $this.hasClass('big-awesome') ? { width: 200, height: 200} : { width: 200, height: 200};
    $this.toggleClass('big-awesome');
    
    $this.find('.item-awesome-content').stop().animate( tileStyle );

    $container.isotope( 'reLayout' )
    
  });

});

});





$(document).ready( function() {

 $(function(){

  // $('.mas-2-div-text').hide();
  
  var $container = $('#container1');
  
  $container.isotope({
    itemSelector: '.item-awesome-layout-2',
    masonry: {
      columnWidth: 60
    }
  })
  
  $('.item-awesome-layout-2').click(function(){
  // $('.mas-2-div-text').toggle();

    var $this = $(this),
        tileStyle = $this.hasClass('big-awesome') ? { width: 200, height: 200} : { width: 200, height: 200};
    $this.toggleClass('big-awesome');
    
    $this.find('.item-awesome-content-2').stop().animate( tileStyle );

    $container.isotope( 'reLayout' )
    
  });

});

});




