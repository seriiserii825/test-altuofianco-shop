import gsap from 'gsap';
import ScrollTrigger from "gsap/ScrollTrigger";

export default function productCategoriesAnimation() {
    gsap.registerPlugin(ScrollTrigger);

    gsap.from(".product-categories-custom li", {
        scrollTrigger: {
            start: "top: 80%",
            trigger: ".product-categories-custom li",
        },
        y: 100,
        opacity: 0,
        duration: 0.6,
        stagger: 0.2
    });
}
