document.addEventListener("DOMContentLoaded", () => {
    const iconesSuppression = document.getElementsByClassName("fa-delete-left")
   for (const iconeSuppression of iconesSuppression) {
        iconeSuppression.addEventListener("click",supprimerInformation);
     }
});

function supprimerInformation(event) {
    const formdData= new FormData()
    formData.append("index", index);
    //formData.append("donnee", $donnee);
     fetch("index.php?action=suprimmeinformation",{
        method: "POST",
        body: formData,
    });
    
}
