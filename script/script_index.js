var info = document.querySelector("main p:first-of-type");
var form = document.querySelector("main form");
var log = document.querySelector("main form button:first-of-type");
var nouv = document.querySelector("main form button:nth-child(2)");
var plus = document.querySelector("main form div");

log.addEventListener("click", () =>
{
	log.className = "selected";
	log.setAttribute("description", "selected");
	nouv.setAttribute("description", "unselected");
	nouv.className = "";
	plus.style.display = "none";
	form.action = "http://localhost:8080/pages/login.php";
	p.innerText = "";
});
nouv.addEventListener("click", () =>
{
	nouv.className = "selected";
	nouv.setAttribute("description", "selected");
	log.setAttribute("description", "unselected");
	log.className = "";
	plus.style.display = "block";
	form.action = "http://localhost:8080/pages/new_player.php";
	p.innerText = "";
});
