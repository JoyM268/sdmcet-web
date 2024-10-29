var path = "M 10 100 Q 500 100 490 100";
document
	.querySelector("#string")
	.addEventListener("mousemove", function (dets) {
		let path = `M 10 100 Q ${dets.x} ${dets.y} 990 100`;
		gsap.to("svg path", {
			attr: {
				d: path,
			},
			duration: 0.3,
			ease: "power3.out",
		});
	});

document
	.querySelector("#string")
	.addEventListener("mouseleave", function (dets) {
		let path = `M 10 100 Q 500 100 990 100`;
		gsap.to("svg path", {
			attr: {
				d: path,
			},
			duration: 1.5,
			ease: "elastic.out(1, 0.2)",
		});
	});
