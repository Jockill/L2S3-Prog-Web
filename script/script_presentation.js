const portraits = document.querySelectorAll(".portrait");

function back(portrait)
{
	portrait.style.transform = "rotateY(180deg)";
	portrait.querySelector("h5").style.transform = "rotateY(180deg)";
	let bulles = portrait.querySelectorAll("div:nth-of-type(odd)");
	bulles[0].style.display = "none";
	bulles[1].style.display = "none";
	portrait.querySelector("img").style.display = "none";
	portrait.querySelector("p").style.display = "block";
	portrait.querySelector("p").style.transform= "rotateY(180deg)";
}

function front(portrait)
{
	portrait.style.transform = "rotateY(0)";
	portrait.querySelector("h5").style.transform = "rotateY(0)";
	let bulles = portrait.querySelectorAll("div:nth-of-type(odd)");
	bulles[0].style.display = "flex";
	bulles[1].style.display = "flex";
	portrait.querySelector("img").style.display = "block";
	portrait.querySelector("p").style.display = "none";
	portrait.querySelector("p").style.transform= "rotateY(0)";
}

document.querySelector("#tourner").addEventListener("click", () =>
{
	for (var i=0; i<portraits.length; i++)
	{
		if (portraits[i].style.transform == "rotateY(180deg)")
			front(portraits[i]);
		else
			back(portraits[i]);
	}
});
