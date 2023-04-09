import gsap from 'gsap';
import ScrollTrigger from "gsap/ScrollTrigger";

export default function homeIntroAnimation() {
    gsap.registerPlugin(ScrollTrigger);

    function homeIntro() {
        let tl = gsap.timeline();
        tl.fromTo('.main-header .logo', {
            opacity: 0,
            scale: 4,
        }, {
            opacity: 1,
            scale: 1,
            duration: 2,
            ease: "power4.out"
        });
        tl.fromTo('.home-intro__img', {
            opacity: 0,
            scale: 1.4,
        }, {
            opacity: 1,
            scale: 1,
            duration: 2,
            ease: "power4.out"
        }, "-0.2");
        tl.fromTo('.home-intro__title:first-of-type', {
            opacity: 0,
            y: 50,
        },{
            opacity: 1,
            y: 0,
            duration: 2,
            ease: "power4.out"
        }, "-=1.5");
        tl.fromTo('.home-intro__subtitle', {
            opacity: 0,
            y: 50,
        }, {
            opacity: 1,
            y: 0,
            duration: 1,
            ease: "power4.out"
        }, "-=1.5");
        tl.fromTo('.home-intro__title:last-of-type', {
            opacity: 0,
            y: 50,
        },{
            opacity: 1,
            y: 0,
            duration: 2,
            ease: "power4.out"
        }, "-=1");
    }

    if (document.body.classList.contains('page-template-front-page')) {
        homeIntro();
    }
}