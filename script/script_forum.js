document.querySelector('#more').addEventListener("click", () =>
{
	fetch('http://localhost:8080/pages/forum.php')
	.then((response) =>
	{
		response.json()
		.then(data =>
		{
			console.log(data);
		})
		// .catch(() =>
		// {
		// 	console.log("Erreur JSON");
		// })
	})
	.catch(() =>
	{
		console.log("Erreur response.");
	})
})
