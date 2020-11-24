const portraits = document.querySelectorAll(".portrait");


for (var i=0; i<portraits.length; i++)
    portraits[i].addEventListener("click", function()
    {
        let text = this.getElementsByTagName('p')[0];
        let image = this.getElementsByTagName('img')[0];

        console.log(text, image);

        if (text.style.display === "" || text.style.display === "none") text.style.display = "block";
        else text.style.display = "none";

        if (image.style.display === "" || image.style.display === "block")
            image.style.display = "none";
        else
            image.style.display = "block";

    }
)
