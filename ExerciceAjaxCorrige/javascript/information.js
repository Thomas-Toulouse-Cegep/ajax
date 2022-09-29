function supprimerInfo(informations) {}
document.addEventListener("DOMContentLoaded", () => {
    const iconesSuppression = document.getElementsByClassName("fa-solid fa-delete-left")
   for (const iconeSuppression of iconesSuppression) {
        iconeSuppression.addEventListener("click",supprimerInformation);
     }
});

function supprimerInformation(event) {
    debugger
    const formData= new FormData()
    /*const element = event.currentTarget;
    const I = document.getElementById("index");*/
    
    const lignes = document.getElementById("i").childNodes;
    const element = event.target=document.getElementById("ligneinfo");//.getElementById("index");
   // console.log(element.firstChild.value)
    const index = element.innerText;
   
    formData.append('index',index)
    
    //console.log("vous aves cliquer: ",index)
    //formdData.
   // formData.append("donnee", $donnee);
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
       // debugger
    }).then(supprimerInfo);
    
}
function supprimerInfo(informations) {
    debugger
    console.log(informations);
// affiche les membre dans une table avec complexité
/*const modele = document.querySelector("#ligneinfo");
console.log(modele)
const tbody = document
    .querySelector("#tableInfo")
    .querySelector("tbody");
    Object.innerHTML(info).forEach((donnee,index)=> {
    const clone = document.removeChild(modele.content,true);
    const tds = clone.querySelectorAll("td");
    tds[0].textContent = index;
    
    tbody.remove(clone);*/
 /*});*/    
}

