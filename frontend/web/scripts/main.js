$(document).ready(function(){
    // Menu
	$(".header-menu__switcher").click(function(){
		$(".header-menu").addClass("active");
	});
    $(".header-menu__close").click(function(){
		$(".header-menu").removeClass("active");
	});

    // Scroll
    $("a.scrollto").click(function () {
        let elementClick = $(this).attr("href")
        let destination = $(elementClick).offset().top;
        $("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 600);
        return false;
    });

	// Promoslider
	if($('.promoslider').length > 0){
		$('.promoslider').slick({
            infinite: false,
			//autoplay: true,
			autoplaySpeed: 5000,
            fade: true,
			arrows: true,
			dots: false,
			slidesToShow: 1,
			accessibility: false,
			responsive: [
			{
				breakpoint: 767,
				settings: {
        			adaptiveHeight: true,
				}
			}]
		});
	}

	// Mainprojects carousel
	if($('.mainprojects-carousel').length > 0){
		$('.mainprojects-carousel').slick({
			//autoplay: true,
			//infinite: false,
			arrows: true,
			dots: false,
			slidesToShow: 3,
			accessibility: false,
			autoplaySpeed: 3000,
			responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
				}
			}]
		});
	}

    // Work slider
	if($('.work-slider').length > 0){
		$('.work-slider').slick({
			//autoplay: true,
			infinite: false,
			arrows: true,
			dots: false,
			slidesToShow: 1,
			accessibility: false,
			autoplaySpeed: 3000,
			responsive: [
			{
				breakpoint: 576,
				settings: {
                    adaptiveHeight: true
				}
			}]
		});
	}

	// Fancybox
	if($('.fancybox').length > 0){
		$(".fancybox").fancybox({
			loop : false,
			arrows : true,
			buttons : [
				'thumbs',
				'close'
			],
		});
	}

	// Phone mask
	$(".input_phone").inputmask("+7 (999) 999 99 99");

	// Modal callback
	$(".js-btn-callback").on("click", function(event){
	    event.preventDefault();
	    $.fancybox.open({
	        src  : "#modal-callback",
	        closeExisting: true,
	        baseClass: "dark__bg",
	        touch: false,
	        transitionEffect: "circular",
	    });
	});

	$('#callback-form').on('submit', function(e) {
		e.preventDefault();
		let form = $(this);
		let formData = form.serialize();

		if (form.find('input').filter(function() { return $(this).val() === ""; }).length === 0) {
			$.ajax({
				url: form.attr('action'),
				method: 'post',
				data: formData,
				success: function(data) {
					form[0].reset();
					$.fancybox.open({
						src  : "#modal-completed",
						closeExisting: true,
						baseClass: "dark__bg",
						touch: false,
						transitionEffect: "circular",
					});
				},
				error: function() {

				}
			});
		}
	});


	$('#modal-form').on('submit', function(e) {
		e.preventDefault();
		let form = $(this);
		let formData = form.serialize();

		if (form.find('input').filter(function() { return $(this).val() === ""; }).length === 0) {
			$.ajax({
				url: form.attr('action'),
				method: 'post',
				data: formData,
				success: function(data) {
					form[0].reset();
					$.fancybox.open({
						src  : "#modal-completed",
						closeExisting: true,
						baseClass: "dark__bg",
						touch: false,
						transitionEffect: "circular",
					});
				},
				error: function() {

				}
			});
		}
	});




}); 