function checkStr(str)
{
    if (str != '')
        return 1;
    else
        return 0;
}

function checkMail(mail)
{
    let reg = new RegExp("^([a-z]{1,}|[a-z]{1,}\.[a-z]{1,})@[a-z]{1,}\.(com|fr|net|org)$");
    return reg.test(mail);
}

function checks(user)
{
    var err = 1;
    if (!checkStr(user["nom"]))
    {
        toast.innerHTML += "Mauvais nom. ";
        err--;
        setClass("#nom", "error");
    }
    if (!checkStr(user["prenom"]))
    {
        toast.innerHTML += "Mauvais prenom. ";
        err--;
        setClass("#prenom", "error");
    }
    if (!checkMail(user["mail"]))
    {
        toast.innerHTML += "Mauvais mail. ";
        err--;
        setClass("#mail", "error");
    }
    if (!checkStr(user["message"]))
    {
        toast.innerHTML += "Mauvais message. ";
        err--;
        setClass("#message", "error");
    }
    return err;
}

function setClass(selector, className)
{
    document.querySelector(selector).className = className;
    document.querySelector(selector).parentElement.className = className;
}

function prepareForm()
{
    toast.innerHTML = "";
    setClass("#nom", "");
    setClass("#prenom", "");
    setClass("#mail", "");
    setClass("#message", "");
}

var toast = document.querySelector("main > div");
// Recuperer la liste des elements du form et les mettre dans un tableau associatif
document.querySelector("#contact button").addEventListener("click", event => {
    event.preventDefault(); //Empeche la soumission automatique

    prepareForm();

    //All revoie un tableau
    let user = {};
    document.querySelectorAll('#contact input').forEach(input => {
        user[input.name] = input.value;
    })
    document.querySelectorAll('#contact textarea').forEach(input => {
        user[input.name] = input.value;
    })


    if (checks(user) == 1)
    {
        toast.innerHTML = "Nous gardons votre demande sous la main et vous recontacterons incessament sous peu.";
        document.querySelector("#contact").reset();
    }
    toast.className = "show";
    setTimeout(function(){toast.className = toast.className.replace("show", "");}, 3500);
})
