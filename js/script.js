$(document).ready(function() {

  // open the lateral panel
	$('.cd-btn').on('click', function(event){
		event.preventDefault();
		$('.cd-panel').addClass('is-visible');
	});
	//clode the lateral panel
	$('.cd-panel').on('click', function(event){
		if( $(event.target).is('.cd-panel') || $(event.target).is('.cd-panel-close') ) { 
			$('.cd-panel').removeClass('is-visible');
			event.preventDefault();
		}
	});
  
  
  
  /* and creative scripts below from this point */
  // calculate height of intro text and vertically center it within ".landing" on different screen sizes
	var intro_text_placement = $('.land-intro').height();
	var intro_text_height = $('.land-intro h1').height() / 2;
	$('.land-intro h1').css({
		'margin-top': ((intro_text_placement / 2) - intro_text_height)
	});
  
	$(window).resize(function() {
		var intro_text_placement = $('.land-intro').height();
		var intro_text_height = $('.land-intro h1').height() / 2;
		$('.land-intro h1').css({
			'margin-top': ((intro_text_placement / 2) - intro_text_height)
		});
	});
	
	
	// fix "#projects_main.proj-subnav" when scroll to top
	var intro_height = $('.landing-sm').height() - $('.masthead-top').height();
	
	$(window).resize(function() {
		var intro_height = $('.landing-sm').height() - $('.masthead-top').height();
	});
	
	$(window).scroll(function(){
		if($(window).scrollTop() >= intro_height){
			$("#projects_main.proj-subnav").addClass('fix-proj-subnav');
		} else {
			$('#projects_main.proj-subnav').removeClass('fix-proj-subnav');
		}
	});
	
	
	// calculate height of ".land-intro + #header.homepage", show/hide homeoage header and fix ".wesay" when scroll past landing intro
	if ($(window).width() < 768) {
		var homepage_intro_height = $('.land-intro').height() - $('#header.homepage').height();
	} else {
		/*var homepage_intro_height = $('.land-intro').height() - $('.intro-news').height() - $('#header.homepage').height();*/
		var homepage_intro_height = $('.land-intro').height() - $('#header.homepage').height() + 55;
	}
	
	$(window).resize(function() {
		if ($(window).width() < 768) {
			var homepage_intro_height = $('.land-intro').height() - $('#header.homepage').height();
		} else {
			/*var homepage_intro_height = $('.land-intro').height() - $('.intro-news').height() - $('#header.homepage').height();*/
			var homepage_intro_height = $('.land-intro').height() - $('#header.homepage').height() + 55;
		}
	});
	
	// show/hide homeoage header
	if ($(window).width() <= 767) {
		$('.homepage nav').removeClass('nav-hide');
		$('#header.homepage .masthead-top .logo').show();
		$('#header.homepage .masthead-top .logo_big').hide();
	} else {
		$('.homepage nav').addClass('nav-hide');
		$('#header.homepage .masthead-top .logo').hide();
		$('#header.homepage .masthead-top .logo_big').show();
		
		$(window).scroll(function(){
			if($(window).scrollTop() >= homepage_intro_height){
				$('#header.homepage .masthead-top').removeClass('masthead-big');
				$('#header.homepage .masthead-top .logo').fadeIn();
				$('#header.homepage .masthead-top .logo_big').fadeOut().queue(function(){
					$(this).hide();
					$(this).dequeue();
				});
				$('.homepage nav').addClass('nav-show');
			} else {
				$('#header.homepage .masthead-top').addClass('masthead-big');
				$('#header.homepage .masthead-top .logo_big').fadeIn();
				$('#header.homepage .masthead-top .logo').fadeOut().queue(function(){
					$(this).hide();
					$(this).dequeue();
				});
				$('.homepage nav').removeClass('nav-show');
			}
		});	
	}
	
	$(window).resize(function() {
		if ($(window).width() <= 767) {
			$('.homepage nav').removeClass('nav-hide');
			$('#header.homepage .masthead-top .logo').show();
			$('#header.homepage .masthead-top .logo_big').hide();
			
			
		} else {
			$('.homepage nav').addClass('nav-hide');
			$('#header.homepage .masthead-top .logo').hide();
			$('#header.homepage .masthead-top .logo_big').show();
			
			if($(window).scrollTop() >= homepage_intro_height){
				$('#header.homepage .masthead-top .logo').show();
				$('#header.homepage .masthead-top .logo_big').hide();
			}
		}
	});
	
	
	
	
	
	// fix ".wesay"
	$(window).scroll(function(){
		if($(window).scrollTop() >= homepage_intro_height){
			$(".wesay").addClass('fix-wesay');
		} else {
			$('.wesay').removeClass('fix-wesay');
		}
	});
	
	
	//show #application_form when click button #apply_now
	$('#apply_now').click(function(){
		$("#application_form").slideToggle("slow", function() {
    	// Animation complete.
 		 });
	});
	
});

