gsap.from("#page1 #box", {
	scrollTrigger: "#page1 #box",
	scale: 0,
	duration: 2,
	rotate: 360,
});

gsap.from("#page2 #box", {
	scrollTrigger: {
		trigger: "#page2 #box",
		scroller: "body",
		scrub: 1,
		pin: true,
	},
	scale: 0,
	rotate: 360,
});

gsap.from("#page3 #box", {
	scrollTrigger: {
		trigger: "#page3 #box",
		scroller: "body",
		scrub: 2,
		start: "top 60%",
		end: "top 50%",
	},
	scale: 0,
	rotate: 360,
});
