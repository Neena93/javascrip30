const inputs = document.querySelectorAll('.controls input');

function handleUpdate() {
	const suffix = this.dataset.sizing || '';
	console.log(suffix);
}
Array.from(inputs).forEach(function(input) {
	input.addEventListener('change', handleUpdate);
	Array.from(inputs).forEach(function(input) {
		input.addEventListener('mousemove', handleUpdate);
}
