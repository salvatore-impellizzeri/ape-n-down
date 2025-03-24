var initScroll = function() {
    //classe aggiuntiva scroll
    $(document).on('scroll', () => {
        $('body').toggleClass('body--scroll', $(document).scrollTop() > 0);
    });
}

window.addEventListener('load', function(){
    document.querySelector('body').classList.add('loading-done');

    initScroll();
});

//Check if the document is loaded (so that this script can be placed in the <head>)
document.addEventListener("DOMContentLoaded", () => {

	// Use Intersection Observer to determine if objects are within the viewport
	const observer = new IntersectionObserver(entries => {
	  entries.forEach(entry => {
		if (entry.isIntersecting) {
		  entry.target.classList.add('in-view');
		  return;
		}
		entry.target.classList.remove('in-view');
	  });
	});

	// Get all the elements with the .animate class applied
	const allAnimatedElements = document.querySelectorAll('.animate');

	// Add the observer to each of those elements
	allAnimatedElements.forEach((element) => observer.observe(element));

}); 

// CARDS GSAP

// document.addEventListener("DOMContentLoaded", function () {
//     gsap.registerPlugin(ScrollTrigger, Flip);

//     const cards = gsap.utils.toArray(".card-gsap");

//     cards.forEach((card, i) => {
//         let startOffset = 200; 

//         // if (i === 1) startOffset += 115;
//         // if (i === 2) startOffset += 200; 

//         ScrollTrigger.create({
//             trigger: card,
//             start: `top-=${i * 90} top+=200`,
//             end: `bottom+=500 bottom-=100`,
//             pin: true,
//             endTrigger: ".endy-trendy",
//             scrub: true,
//         });

//         gsap.from(card, {
//             yPercent: 100,
//             ease: "power1.inOut",
//             scrollTrigger: {
//                 trigger: card,
//                 start: `top bottom-=${startOffset}`,
//                 end: "top center",
//                 scrub: 1,
//             }
//         });
//     });
// });

// FOOTER

document.addEventListener("DOMContentLoaded", function () {
    gsap.registerPlugin(ScrollTrigger);

    const footer = document.querySelector(".footer__animation");

    gsap.from(footer, {
        scrollTrigger: {
            trigger: footer,
            start: "top 100%",
            toggleActions: "play none none none"
        },
        scale: 0.9,
        transformOrigin: "bottom center",
        duration: 0.8,
        ease: "power2.inOut"
    });
});
