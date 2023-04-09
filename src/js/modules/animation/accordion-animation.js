import gsap from 'gsap';
import ScrollTrigger from "gsap/ScrollTrigger";

export default function accordionAnimation() {
	gsap.registerPlugin(ScrollTrigger);
	gsap.from(".accordion", {
		scrollTrigger: {
			start: "top: 100%",
			trigger: ".accordion",
		},
		opacity: 0,
		scale: 1.2,
		y: "10%",
		duration: 1.4,
	});
	gsap.from(".accordion__main-title", {
		scrollTrigger: {
			start: "top: 100%",
			trigger: ".accordion__main-title",
		},
		opacity: 0,
		y: "-10rem",
		duration: 3,
	});
}
