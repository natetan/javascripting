
// This is how you hide something in html [toggle on and off]
var terms = document.getElementById("terms");
terms.addEventListener("click", showContent);

function showContent() {
	var terms = document.getElementById("conditions");
	if(terms.className === "conditions bg-info hide") {
		terms.className = "conditions bg-info";
	} else {
		terms.className = "conditions bg-info hide";
	}
}