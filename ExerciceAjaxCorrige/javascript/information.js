document.addEventListener("DOMContentLoaded", () => {
    const iconesSuppression = document.getElementsByClassName("fa-delete-left")
   for (const iconeSuppression of iconesSuppression) {
        iconeSuppression.addEventListener("click",supprimerInformation);
     }
});

function supprimerInformation(event) {
    const formdData= new FormData()
    formData.append("debut", $debut);
    formData.append("nombre", $nombre);
     fetch("index.php?action=information");
}
