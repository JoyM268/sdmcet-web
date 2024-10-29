let t1 = gsap.timeline();
let t2 = gsap.timeline();

t1.to("#box1", {
	x: 500,
	delay: 1,
	duration: 2,
});

t1.to("#box2", {
	x: 500,
	duration: 2,
	rotate: 360,
});

t1.to("#box3", {
	x: 500,
	duration: 2,
	rotate: 360,
	borderRadius: 50,
});

t2.from("h2", {
	opacity: 0,
	duration: 1,
	y: -20,
	delay: 0.5,
});

t2.from("h4", {
	y: -20,
	duration: 1,
	opacity: 0,
	stagger: 1,
});

t2.from("h1", {
	scale: 0.2,
	duration: 0.5,
	opacity: 0,
	y: 20,
});
