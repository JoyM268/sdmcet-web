gsap.to("#box1", {
	x: 500,
	delay: 1,
	duration: 2,
	rotate: 360,
	borderRadius: 50,
	repeat: -1,
	yoyo: true,
});

gsap.from("#box2", {
	x: 500,
	delay: 1,
	duration: 2,
	scale: 1.5,
	rotate: 360,
	borderRadius: 50,
	repeat: -1,
	yoyo: true,
});

gsap.from("h1", {
	opacity: 0,
	duration: 2,
	y: 30,
	delay: 1,
	stagger: 1,
});
