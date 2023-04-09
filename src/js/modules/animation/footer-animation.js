import gsap from 'gsap';
import ScrollTrigger from "gsap/ScrollTrigger";

export default function footerAnimation() {
    gsap.registerPlugin(ScrollTrigger);
    
    gsap.from(".main-footer__contacts", {
        scrollTrigger: {
            start: "top: 100%",
            trigger: ".main-footer__wrap",
        },
        opacity: 0,
        duration: 2,
        y: 200,
    });
    gsap.from(".main-footer__form", {
        scrollTrigger: {
            start: "top: 100%",
            trigger: ".main-footer__wrap",
        },
        opacity: 0,
        duration: 1,
        y: 200,
    });

    gsap.from(".main-footer__item", {
        scrollTrigger: {
            start: "top: 100%",
            trigger: ".main-footer__wrap",
        },
        opacity: 0,
        y: 90,
        stagger: .3
    });
}
