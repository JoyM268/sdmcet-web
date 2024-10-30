function breakText() {
	var h1 = document.querySelector("h1");
	var h1Text = h1.textContent;
	var splittedText = h1Text.split("");

	var halfValue = Math.floor(splittedText.length / 2);
	clutter = "";
	splittedText.forEach((n, i) => {
		clutter += `<span class="${i < halfValue ? "a" : "b"}">${n}</span>`;
	});

	h1.innerHTML = clutter;
}

breakText();

gsap.from(".a", {
	opacity: 0,
	stagger: 0.15,
	duration: 0.6,
	delay: 0.5,
	y: 50,
});

gsap.from(".b", {
	opacity: 0,
	stagger: -0.15,
	duration: 0.6,
	delay: 0.5,
	y: 50,
});
