document.addEventListener("DOMContentLoaded", () => {
    const iconesSuppression = document.getElementsByClassName("fa-delete-left")
   for (const iconeSuppression of iconesSuppression) {
        iconeSuppression.addEventListener("click",supprimerInformation);
     }
});

function supprimerInformation(event) {
    const formData= new FormData()
    const element = event.currentTarget;
    const login = element.value;
    formData.append("index", index);
    console.log(index)
    //formdData.
    //formData.append("donnee", $donnee);
     fetch("index.php?action=suprimmeinformation",{
        method: "DELETE",
        body: formData,
    });
    
}

