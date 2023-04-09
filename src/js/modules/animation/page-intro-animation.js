import gsap from 'gsap';
import ScrollTrigger from "gsap/ScrollTrigger";

export default function pageIntroAnimation() {
	gsap.registerPlugin(ScrollTrigger);
	function pageIntro() {
		let tl = gsap.timeline();
		tl.fromTo('.page-intro__img', {
			opacity: 0,
			y: "-40%"
		}, {
			opacity: 1,
			y: 0,
			duration: 2,
			ease: "power4.out"
		});
		tl.fromTo('.page-intro__title', {
			opacity: 0,
			y: 100
		}, {
			opacity: 1,
			y: 0,
			duration: 3,
			ease: "power4.out"
		}, "-=2");
		tl.fromTo('.page-intro__subtitle', {
			opacity: 0,
		}, {
			opacity: 1,
			duration: 2,
			ease: "power4.out"
		}, "-=2");
	}
	pageIntro();
}