function supprimerInfo(ligneinfo) {}
document.addEventListener("DOMContentLoaded", () => {
    const iconesSuppression = document.getElementsByClassName("fa-solid fa-delete-left")
   for (const iconeSuppression of iconesSuppression) {
        iconeSuppression.addEventListener("click",supprimerInformation);
     }
});

function supprimerInformation(event) {
    const formData= new FormData();
    const index = event.currentTarget;
    formData.append("index",index);
     fetch("index.php?action=supprimerInfo",{
        method: "POST",
        body: formData,
    })
        .then((reponse) => {
        if (!reponse.ok) {
            return [];
        }
        return reponse.json();
    }).then(supprimerInfo);
    
}
function supprimerInfo(ligneinfo) {
    console.log(ligneinfo);
    const modele = document.querySelector("#ligneinfo");
    console.log(modele.children);
    const tds = modele.querySelectorAll("td");
    modele.remove(tds);

}