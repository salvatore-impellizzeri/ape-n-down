class ObserverAnimation {
    constructor(el) {
        // Elements
        this.$el = el;
        this.isInView = false;
        this.positionClass = 'is-out'; // Elemento fuori dalla vista inizialmente
        this.currClass = this.$el.className;

        this.attachEvents();
    }

    visibilityChanged(isVisible, entry) {
        this.isInView = isVisible;

        // Se l'elemento è visibile nella viewport, aggiungi la classe 'is-in' (entrata)
        if (this.isInView && entry.intersectionRatio > 0) {
            this.positionClass = 'is-in';
        } else {
            // Se l'elemento non è visibile, applica la classe di uscita
            if (entry.boundingClientRect.y < 0) {
                this.positionClass = 'slideOutUp'; // Animazione di uscita verso l'alto
            } else {
                this.positionClass = 'slideOutDown'; // Animazione di uscita verso il basso
            }
        }

        return this.positionClass;
    }

    observerScroll() {
        // IntersectionObserver Supported
        let options = {
            root: null, // Usando il viewport come root
            rootMargin: "0px", // Nessun margine
            threshold: 0.1 // Attiva l'osservazione quando il 10% dell'elemento è visibile
        };

        // Crea il nuovo IntersectionObserver
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                let posClass = this.visibilityChanged(entry.isIntersecting, entry);
                // Modifica la classe dell'elemento in base alla visibilità
                this.$el.className = this.currClass + ' ' + posClass;
            });
        }, options);

        // Inizia a osservare l'elemento
        observer.observe(this.$el);
    }

    attachEvents() {
        this.observerScroll();
    }
}

// Applica il comportamento di animazione agli elementi
document.querySelectorAll('.animatable').forEach((el) => {
    new ObserverAnimation(el);
});


// CARDS GSAP

document.addEventListener("DOMContentLoaded", function () {
    gsap.registerPlugin(ScrollTrigger);

    const cards = gsap.utils.toArray(".card-gsap");

    cards.forEach((card, i) => {
        let startOffset = 200; 

        // if (i === 1) startOffset += 115;
        // if (i === 2) startOffset += 200; 

        ScrollTrigger.create({
            trigger: card,
            start: `top-=${i * 90} top+=200`,
            end: `bottom+=500 bottom-=100`,
            pin: true,
            endTrigger: ".endy-trendy",
            scrub: true,
            markers: true
        });

        gsap.from(card, {
            yPercent: 100,
            ease: "power1.inOut",
            scrollTrigger: {
                trigger: card,
                start: `top bottom-=${startOffset}`,
                end: "top center",
                scrub: 1,
            }
        });
    });
});
