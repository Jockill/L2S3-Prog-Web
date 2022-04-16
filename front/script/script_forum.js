var i = 0;
document.querySelector('#more').addEventListener("click", () =>
{
	fetch('http://localhost:8080/pages/forum.php')
	.then((response) =>
	{
		response.json()
		.then(data =>
		{
			// console.log(data[0].author.username);
			var place = document.querySelector("#ajaxxe");
			//Charger les messages 3 par 3 et ne pas loop sur ceux déja affichés.
			for (let i2=0; i<data.length && i2<3; i++ && i2++)
			{
				var comm = document.createElement("article");
				var cadre = document.createElement("div");
				var pp = document.createElement("img");
				if (data[i].author.ppurl == "rien")
					pp.src = "../ressources/icon.png";
				else
					pp.src = data[i].author.ppurl;
				pp.alt = "Image de profil d'un utilisateur";
				var uname = document.createElement("h3");
				uname.innerText = data[i].author.username;
				cadre.appendChild(pp);
				cadre.appendChild(uname);
				var txt = document.createElement("span");
				txt.innerText = data[i].text;
				comm.appendChild(cadre);
				comm.appendChild(txt);
				place.appendChild(comm);
			}
			if (i == data.length)
			{
				document.querySelector("#more").disabled = true;
			}
		})
		.catch(() =>
		{
			console.log("Erreur JSON");
		})
	})
	.catch(() =>
	{
		console.log("Erreur response.");
	})

})


// < ?php foreach ($commentsObj as $comment) : ?>
// 	<article>
// 		<div>
// 			<img src="< ?= $comment->getAuthor()->getPpurl(); ?>" alt="image de profil d'un utilisateur">
// 			<h3> < ?= $comment->getAuthor()->getUsername(); ?> </h3>
// 		</div>
// 		<span> < ?= $comment->getText(); ?> </span>
// 	</article>
// < ?php endforeach; ?>
