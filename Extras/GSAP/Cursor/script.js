let main = document.querySelector("#main");
let img = document.querySelector("#image");
let cursor = document.querySelector("#cursor");

main.addEventListener("mousemove", function (dets) {
	gsap.to("#cursor", {
		x: `${dets.x}`,
		y: `${dets.y}`,
		duration: 1,
		ease: "back.out",
	});
});

img.addEventListener("mouseenter", function () {
	cursor.innerHTML = "View More";
	gsap.to("#cursor", {
		scale: 2,
		backgroundColor: "rgba(255, 255, 255, 0.616)",
	});
});

img.addEventListener("mouseleave", function () {
	cursor.innerHTML = "";
	gsap.to("#cursor", {
		scale: 1,
		backgroundColor: "#fff",
	});
});
