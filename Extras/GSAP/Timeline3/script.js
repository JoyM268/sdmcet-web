var tl = gsap.timeline();
var menu = document.querySelector("#nav i");
var close = document.querySelector("#full i");

tl.to("#full", {
	right: 0,
	duration: 0.8,
});

tl.from("#full h4", {
	opacity: 0,
	x: 150,
	stagger: 0.25,
	duration: 0.7,
});

tl.from("#full i", {
	opacity: 0,
	duration: 0.3,
});

tl.pause();

menu.addEventListener("click", () => {
	tl.play();
});

close.addEventListener("click", () => {
	tl.reverse();
});
