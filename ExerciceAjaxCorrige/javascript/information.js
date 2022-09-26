document.addEventListener("DOMContentLoaded", () => {
    const iconesSuppression = document.getElementsByClassName("fa-delete-left")
   for (const iconeSuppression of iconesSuppression) {
        iconeSuppression.addEventListener("click",supprimerInformation);
     }
});

function supprimerInformation(event) {
    const formData= new FormData()
    const element = event.currentTarget;
    const donnee = element.value;
    formData.append("index", index);
    console.log(index)
    console.log(donnee)
    //formdData.
    //formData.append("donnee", $donnee);
     fetch("index.php?action=suprimmeinformation",{
        method: "DELETE",
        body: formData,
    })
 /*       .then((reponse) => {
        if (!reponse.ok) {
            return [];
        }
        return reponse.json();
    })        
    .then(afficherInformation);
}
function afficherInformation(index) {
// console.log(membres);
// affiche les membre dans une table avec complexité
const modele = document.querySelector("#ligneMembre");
const tbody = document
    .querySelector("#tableInfo")
    .querySelector("tbody");
Object.values(membres).forEach((membre,index)=> {
    const clone = document.importNode(modele.content,true);
    const tds = clone.querySelectorAll("td");
    tds[0].textContent = index;
    
    tbody.appendChild(clone);
});*/
    
}

