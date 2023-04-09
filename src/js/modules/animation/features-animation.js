import gsap from 'gsap';
import ScrollTrigger from "gsap/ScrollTrigger";

export default function featuresAnimation() {
    gsap.registerPlugin(ScrollTrigger);

    gsap.from(".features__title", {
        scrollTrigger: {
            start: "top: 100%",
            trigger: ".features__item",
        },
        opacity: 0,
        y: -90,
        duration: 1,
        stagger: .3
    });
    gsap.from(".features__text", {
        scrollTrigger: {
            start: "top: 100%",
            trigger: ".features__item",
        },
        opacity: 0,
        y: 90,
        duration: 1,
        stagger: .3
    });
}
