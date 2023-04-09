import gsap from 'gsap';
import ScrollTrigger from "gsap/ScrollTrigger";

export default function categoryPageAnimation() {
    gsap.registerPlugin(ScrollTrigger);

    gsap.from(".taxonomy-page__sidebar li", {
        scrollTrigger: {
            start: "top: 100%",
            trigger: ".taxonomy-page__sidebar li",
        },
        opacity: 0,
        y: 300,
        duration: 1,
        stagger: 0.2
    });

    gsap.from(".taxonomy-page__content .products li", {
        scrollTrigger: {
            start: "top: 100%",
            trigger: ".taxonomy-page__content .products li",
        },
        opacity: 0,
        y: 300,
        duration: 0.6,
        stagger: 0.5
    });
}
