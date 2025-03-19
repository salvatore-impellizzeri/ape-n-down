// SWIPER

const swiper = new Swiper('.swiper--home', {
    loop: true,              
    slidesPerView: 1.6,        
    centeredSlides: true,   
    initialSlide: 1,   
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        550: {
            slidesPerView: 2.1,
        },

        700: {
            slidesPerView: 3,
        }
    }
});


const swiper_view = new Swiper('.swiper--view', {
    loop: true,              
    slidesPerView: 1.4,        
    centeredSlides: true,  
    initialSlide: 1, 
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        430: {
            slidesPerView: 1.6,
        },

        500: {
            slidesPerView: 1.8,
        },

        680: {
            slidesPerView: 2
        }
    }
});

const swiper_marquee = new Swiper('.swiper--marquee', {
    spaceBetween: 80,
    centeredSlides: true,
    initialSlide: 5,
    speed: 2700,
    autoplay: {
      delay: 1,
      disableOnInteaction: false,
    },
    loop: true,
    slidesPerView: "auto",

    breakpoints: {
        1200: {
            spaceBetween: 120,
        }
    }
});

// MENU

document.addEventListener("DOMContentLoaded", function (){
    const menu = document.getElementById("menu");
    const menuToggle = document.querySelector(".menu-toggle");
    const body = document.body;

    menuToggle.addEventListener('click', function () {
        menu.classList.toggle('active');
        if (menu.classList.contains("active")) {
            body.style.overflow = "hidden";
        } else {
            body.style.overflow = "auto";
        }
    });
})

// CURSOR

document.addEventListener("DOMContentLoaded", function () {
    const box = document.querySelector(".cursor-hover");
    const images = document.querySelectorAll(".hover-image");
    const texts = document.querySelectorAll('.text-hover');

    images.forEach(image => {
        image.addEventListener("mouseenter", function () {
            box.style.opacity = "1"; 
            texts.forEach(text => {
                text.style.setProperty('opacity', '0.5', 'important');
            });
        });

        image.addEventListener("mousemove", function (e) {
            box.style.left = e.pageX + 10 + "px"; 
            box.style.top = e.pageY - 50 + "px";
        });

        image.addEventListener("mouseleave", function () {
            box.style.opacity = "0"; 
            texts.forEach(text => {
                text.style.setProperty('opacity', '1', 'important');
            });
        });
    });
});

// IMAGE EXPANDS

document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".expandable-image");
    const overlay = document.querySelector(".overlay-img");
    const body = document.body;

    images.forEach(image => {
        image.addEventListener("click", function () {
            image.classList.toggle('active-img');
            if(image.classList.contains('active-img')) {
                overlay.style.opacity = "1";
                body.style.overflow = "hidden"; 
            } else {
                overlay.style.opacity = "0";
                body.style.overflow = "auto"; 
            }
        });
    })
})

// CONTACTS HEADER

document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".header");

    if (window.location.pathname.includes("contacts")) {
        header.classList.add("invert-colors");
    }
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
