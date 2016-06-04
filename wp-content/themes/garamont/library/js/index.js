$('.owl-carousel').owlCarousel({
		items: 1,
		loop: true,
		margin: 10,
		lazyLoad: true,
		merge: true,
		video: true,
      nav: true,
		autoHeight:false,
      navText:[
	      "<span class='arr-l'><img src='img/prev3.png'></span>",
	      "<span class='arr-r'><img src='img/next.png' ></span>"
      ],
		responsive:{ // 삭제시 반응형 작동 안함.
			480:{
				items:1
			},

			600:{
				items:2
			},

			960:{
				items:3
			}
		}
	});

$(window).load(function(){
	window.dispatchEvent(new Event('resize'));
})