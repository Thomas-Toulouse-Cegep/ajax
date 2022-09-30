function supprimerInfo(ligneinfo) {}
document.addEventListener("DOMContentLoaded", () => {
    const iconesSuppression = document.getElementsByClassName("fa-solid fa-delete-left")
   for (const iconeSuppression of iconesSuppression) {
        iconeSuppression.addEventListener("click",supprimerInformation);
     }
});

function supprimerInformation(event) {
    const formData= new FormData()
    /*const element = event.currentTarget;
    const I = document.getElementById("index");*/


    const index = event.currentTarget;
    const ligneinfo =index.id;
   // document.getElementById("ligneinfo"+ligneinfo)
   // console.log("ligneinfo: "+ligneinfo)
    //const lignes = document.getElementById("i").childNodes;
    //const element = event.target=document.getElementById("ligneinfo");//.getElementById("index");
    //console.log(element.firstChild.value)
    //const index = element.innerText;
    //console.log( document.getElementById("i").childNodes);
   // document.getElementById("ligneinfo").remove();
    //document.getElementById("ligneinfo").;
   // document.getElementById("ligneinfo").removeChild(element);
    formData.append("index",index);

    
    //console.log("vous aves cliquer: ",index)
    //formdData.
   // formData.append("donnee", $donnee);
     fetch("index.php?action=supprimerInfo",{
        method: "POST",
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
function supprimerInfo(ligneinfo) {
   // debugger;
    console.log(ligneinfo);
    // affiche les membre dans une table avec complexité
    const modele = document.querySelector("#ligneinfo");
    console.log(modele.children);
    const tbody = document
    .querySelector("#tableInfo")
    .querySelector("tbody");
    const tds = modele.querySelectorAll("td");

    modele.remove(tds);

}