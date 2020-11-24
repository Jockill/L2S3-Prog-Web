// Recuperer la liste des elements du form et les mettre dans un tableau associatif
document.querySelector("form button").addEventListener("click", event => {
    event.preventDefault(); //Empeche la soumission automatique

    //All revoie un tableau
    let user = {};
    document.querySelectorAll('form input').forEach(input => {
        user[input.name] = input.value;
        // console.log(input.name);
    })
    console.log(user);

})
