const swiper = new Swiper('.others__card-container', {
    loop: true,              // Permette lo scorrimento ciclico
    slidesPerView: 3,        // Numero di elementi da visualizzare
    centeredSlides: true,    // Centra la slide attiva
    spaceBetween: 20,        // Spazio tra le slide
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1024: {
            slidesPerView: 3, // 3 elementi visibili su schermi più grandi
        },
        768: {
            slidesPerView: 2, // 2 elementi visibili su schermi più piccoli
        },
        480: {
            slidesPerView: 1, // 1 elemento visibile su schermi molto piccoli
        },
    }
});




const secondSwiper = new Swiper('[data-account-product-slider]', {
    slidesPerView: 3,
    spaceBetween: 20,
    navigation: {
        nextEl: '[data-account-product-slider-next]',
        prevEl: '[data-account-product-slider-prev]',
    },
    pagination: {
        el: '.swiper-pagination',
    },
});

Fancybox.bind("[data-fancybox]", {
    infinite: false,
    Thumbs: false,
    Toolbar: false,
    closeButton: 'outside'
});



$('[data-accordion]').each(function(i,el){
    let toggler = $('[data-accordion-toggler]', el),
        content = $('[data-accordion-content]', el),
        open = false;


    toggler.on('click', function(ev){
        ev.preventDefault();
        $(el).toggleClass('open');

        if (!open) {
            content.animate({height: content.find('> div').outerHeight(true)}, 300);
        } else {
            content.animate({height: 0}, 300);
        }

        open = !open;
    });
});

$('[data-filter]').each(function(i,el){
    let toggler = $('[data-filter-toggler]', el),
        content = $('[data-filter-content]', el),
        open = false;


    toggler.on('click', function(ev){
        ev.preventDefault();
        $(el).toggleClass('open');

        if (!open) {
            content.animate({height: content.find('> ul').outerHeight(true)}, 300);
        } else {
            content.animate({height: 0}, 300);
        }

        open = !open;
    });
});

$('[data-checkout-accordion]').each(function(i,el){
    let input = $('input[type="checkbox"]', el),
        content = $('[data-checkout-accordion-content]', el);


    input.on('change', function(ev){

        if (input.is(':checked')) {
            $(el).addClass('open');
            content.animate({height: content.find('> div').outerHeight(true)}, 300);
        } else {
            $(el).removeClass('open');
            content.animate({height: 0}, 300);
        }

    }).trigger('change');
});


$('[data-number-input]').each(function(i, el){
	var $input = $(el).find('input'),
		$qty = parseInt($input.val()),
		$min = parseInt($input.attr('min')),
		$max = parseInt($input.attr('max')),
		$step = parseInt($input.attr('step')),
		$decQty = $(el).find('[data-number-input-dec]'),
		$incQty = $(el).find('[data-number-input-inc]'),
		incQty = function(){
			if($qty + $step <= $max){
				$input.val($qty+$step).trigger('change');
			}
		},
		decQty = function(){
			if($qty - $step >= $min){
				$input.val($qty-$step).trigger('change');
			}
		};

	$decQty.click(function(){decQty()});
	$incQty.click(function(){incQty()});

	$(el).change(function(){
		$qty = parseInt($input.val())
		$decQty.toggleClass('disabled', $qty <= $min);
		$incQty.toggleClass('disabled', $qty >= $max);
	});

	$input.trigger('change');
});
