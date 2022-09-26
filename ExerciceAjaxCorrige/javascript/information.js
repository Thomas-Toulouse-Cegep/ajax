document.addEventListener("DOMContentLoaded", () => {
    const iconesSuppression = document.getElementsByClassName("fa-delete-left")
   for (const iconeSuppression of iconesSuppression) {
        iconeSuppression.addEventListener("click",supprimerInformation);
     }
});

function supprimerInformation(event) {
    const formData= new FormData()
    const element = event.currentTarget;
    const index = element.values;
    formData.append("index", index);
    
    console.log(index)
    //formdData.
    //formData.append("donnee", $donnee);
     fetch("index.php?action=supprimerInfo",{
        method: "DELETE",
        body: formData,
    })
        .then((reponse) => {
        if (!reponse.ok) {
            return [];
        }
        console.log(reponse)
        return reponse.json();
    })        
    .then(supprimerInfo);
}
function supprimerInfo(info) {
// console.log(membres);
// affiche les membre dans une table avec complexité
const modele = document.querySelector("#index");
const tbody = document
    .querySelector("#tableInfo")
    .querySelector("tbody");
    Object.values(info).forEach((donnee,index)=> {
    const clone = document.removeChild(modele.content,true);
    const tds = clone.querySelectorAll("td");
    tds[0].textContent = index;
    
    tbody.appendChild(clone);
});
    
}

