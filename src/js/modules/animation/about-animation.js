import gsap from 'gsap';
import ScrollTrigger from "gsap/ScrollTrigger";

export default function aboutAnimation() {
    gsap.registerPlugin(ScrollTrigger);

    gsap.from(".about-block__img", {
        scrollTrigger: {
            start: "top: 100%",
            trigger: ".about-block__img",
        },
        opacity: 0,
        x: 300,
        duration: 1.5
    });
    gsap.from(".about-block__content", {
        scrollTrigger: {
            start: "top: 100%",
            trigger: ".about-block__content",
        },
        opacity: 0,
        x: -300,
        duration: 1.2
    });
    gsap.from(".about-block .line", {
        scrollTrigger: {
            start: "top: 100%",
            trigger: ".about-block .line",
        },
        opacity: 0,
        y: 600,
        duration: 4,
    });
}
