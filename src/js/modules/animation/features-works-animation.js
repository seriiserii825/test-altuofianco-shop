import gsap from 'gsap';
import ScrollTrigger from "gsap/ScrollTrigger";

export default function featuresWorksAnimation() {
	gsap.registerPlugin(ScrollTrigger);
	gsap.from(".features-works__item:first-of-type .features-works__img", {
		scrollTrigger: {
			start: "top: 100%",
			trigger: ".features-works__item:first-of-type",
		},
		opacity: 0,
		x: "50%",
		duration: 1.4,
	});
	gsap.from(".features-works__item:first-of-type .features-works__content", {
		scrollTrigger: {
			start: "top: 100%",
			trigger: ".features-works__item:first-of-type",
		},
		opacity: 0,
		x: "-50%",
		duration: 1.4,
	});
	gsap.from(".features-works__item:nth-of-type(2) .features-works__img", {
		scrollTrigger: {
			start: "top: 100%",
			trigger: ".features-works__item:nth-of-type(2)",
		},
		opacity: 0,
		x: "50%",
		duration: 1.4,
	});
	gsap.from(".features-works__item:nth-of-type(2) .features-works__content", {
		scrollTrigger: {
			start: "top: 100%",
			trigger: ".features-works__item:nth-of-type(2)",
		},
		opacity: 0,
		x: "-50%",
		duration: 1.4,
	});
	gsap.from(".features-works__item:nth-of-type(3) .features-works__img", {
		scrollTrigger: {
			start: "top: 100%",
			trigger: ".features-works__item:nth-of-type(3)",
		},
		opacity: 0,
		x: "50%",
		duration: 1.4,
	});
	gsap.from(".features-works__item:nth-of-type(3) .features-works__content", {
		scrollTrigger: {
			start: "top: 100%",
			trigger: ".features-works__item:nth-of-type(3)",
		},
		opacity: 0,
		x: "-50%",
		duration: 1.4,
	});
}
