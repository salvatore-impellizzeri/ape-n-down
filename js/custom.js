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
        },
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
    allowTouchMove: false,
    touchMoveStopPropagation: false,

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

    if(images) {
        images.forEach(image => {
            const svg = image.querySelector(".svg");
    
            image.addEventListener("mouseenter", function () {
                box.style.opacity = "1"; 
                
                if (svg) {
                    svg.classList.remove("zoomOut");  
                    svg.classList.add("zoomIn");    
                }
            });
    
            image.addEventListener("mousemove", function (e) {
                box.style.left = e.pageX + 10 + "px"; 
                box.style.top = e.pageY - 50 + "px";
            });
    
            image.addEventListener("mouseleave", function () {
                box.style.opacity = "0"; 
    
                if (svg) {
                    svg.classList.remove("zoomIn");  
                    svg.classList.add("zoomOut");   
                }
            });
        });
    }
});

// CONTACTS HEADER

document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".header");
    const menuToggle = document.querySelector(".menu-toggle");

    if (window.location.pathname.includes("contacts")) {
        function updateHeaderColor() {
            header.classList.add("invert-colors");  
        }

        updateHeaderColor(); 

        menuToggle.addEventListener("click", function () {
            header.classList.toggle("invert-colors"); 
        });
    }
});

// IMAGE FIRST TITLE

    document.addEventListener("DOMContentLoaded", function () {

        const image = document.querySelector(".container-title-img img");
        const container2 = document.querySelector(".overlay-img");
        
        if(image) {
            let hasAnimated = false;
            let canScroll = false; // Flag per il controllo dello scroll
            let firstScrollDone = false; // Flag per il primo scroll

            // Disabilita lo scroll all'inizio nella home
            // if (window.location.pathname === "/" || window.location.pathname === "/main.php") {
            //     document.body.style.overflow = "hidden";
            // }    

            function startAnimation() {
                if (!hasAnimated) {
    
                    const state = Flip.getState(image);
    
                    gsap.to(".square-s__img", {
                        opacity: 1, 
                        duration: 0.5,
                        ease: "power2.inOut",
                        onStart: function () {
                            document.querySelector(".square-s__img").style.visibility = "visible";
                        }
                    });
                    
    
                    if (window.innerWidth > 1920) {
                        image.style.maxWidth = "1920px";
                        image.style.display = "block";
                        image.style.margin = "auto";
                    }
    
                    container2.appendChild(image);
    
                    Flip.from(state, {
                        duration: 0.8,
                        ease: "power2.inOut",
                        scale: true,
                        absolute: true,
                    });
    
                    gsap.to(".overlay-img__bg", {
                        opacity: 1,
                        duration: 0.2,
                        ease: "power2.inOut",
                        onComplete: function () {
                            // Riabilita lo scroll dopo l'animazione
                            document.body.style.overflow = "auto";
                            canScroll = true; 
                        }
                    });
    
                    hasAnimated = true;
                }
            }
    
            // Attende 3,5 secondi prima di eseguire l'animazione
            setTimeout(startAnimation, 3500);
    
            // Aggiungi l'evento di scroll
            window.addEventListener("wheel", function (event) {
                if (canScroll && !firstScrollDone) {
    
                    // Imposta il flag per il primo scroll
                    firstScrollDone = true;
    
                    // Imposta l'opacità di .overlay-img a 0 appena inizia lo scroll
                    gsap.to(".overlay-img", {
                        opacity: 0,
                        zIndex: -10,
                        duration: 0.3, 
                        delay: 0.3,
                        ease: "power2.inOut",
                    });
    
                    let scrolled = false; 
    
                    window.addEventListener('scroll', () => {
                        if (!scrolled && window.scrollY > 0) {
                            window.scrollBy({
                                top: window.innerHeight,
                                behavior: 'smooth' 
                            });
    
                            scrolled = true;
                        }
                    });          
                }
            });
        }
    });


// REMOVING ANIMATION ON FIRSTCARD 

document.addEventListener("DOMContentLoaded", function () {
    if (window.location.pathname === "/" || window.location.pathname.includes("index.html")) {
        document.querySelector(".firstCard").addEventListener("animationend", function () {
            this.classList.remove("firstCard");
        });
    }
});

// IMAGE ANIMATION EVENTS GSAP

document.addEventListener("DOMContentLoaded", function() {

    if (window.location.pathname === "/" || window.location.pathname.includes("index.html")) {
        gsap.registerPlugin(ScrollTrigger); 
    
        // Animazione della prima immagine
        gsap.to(".img-wrapper-1", {
            scrollTrigger: {
                trigger: ".secondTitleAnimation",
                start: "center 100%",  
                toggleActions: "play none none none", 
            },
            right: 0,   
            top: 0,  
            transform: "rotate(0deg) scale(1)",
            height: "100%",
            width: "100%",
            pointerEvents: "visible",
            duration: 0.5,
            ease: "power2.inOut",
            delay: 1,     
        });

        gsap.to(".img-wrapper-2", {
            scrollTrigger: {
                trigger: ".secondTitleAnimation",
                start: "center 100%",  
                toggleActions: "play none none none", 
            },
            right: 0,   
            bottom: 0,  
            transform: "rotate(0deg) scale(1)",
            height: "100%",
            width: "100%",
            pointerEvents: "visible",
            duration: 0.5,
            ease: "power2.inOut",
            delay: 1,     
        });
    
        // Animazione della seconda immagine
        // gsap.from(".img-wrapper-2", {
        //     scrollTrigger: {
        //         trigger: ".secondTitleAnimation",
        //         start: "center 100%",
        //         toggleActions: "play none none none", 
        //     },
        //     x: "-12vw",   
        //     y: "-3vw",  
        //     rotate: 4, 
        //     scale: 2,
        //     pointerEvents: "none",
        //     duration: 0.5,
        //     ease: "power2.inOut",
        //     delay: 1,
        // });
    
        // Animazione del testo
        gsap.from(".text-hover", {
            scrollTrigger: {
                trigger: ".secondTitleAnimation",
                start: "center 100%",
                toggleActions: "play none none none", 
            },
            opacity: 0,
            duration: 1,
            ease: "power2.inOut",
            delay: 1
        });
    
        // Gestione degli eventi hover
        const hoverImages = document.querySelectorAll('.hover-image');
        hoverImages.forEach(hoverImage => {
            hoverImage.addEventListener('mouseenter', function() {
                gsap.to('.text-hover', {
                    opacity: 0.5,
                    duration: 0.3,
                    ease: "power2.inOut"
                });
            });
    
            hoverImage.addEventListener('mouseleave', function() {
                gsap.to('.text-hover', {
                    opacity: 1,
                    duration: 0.3,
                    ease: "power2.inOut"
                });
            });
        });
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
