
// This is how you hide something in html [toggle on and off]
var item = document.getElementById("item");
item.addEventListener("click", showContent);

function showContent() {
	var item = document.getElementById("target-element");
	if(item.className == "target-element more-class-names hide") {
		item.className = "target-element more-class-names";
	} else {
		item.className = "target-element more-class-names hide";
	}
}