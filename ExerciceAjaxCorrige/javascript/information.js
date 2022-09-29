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
<<<<<<< HEAD
    
    const lignes = document.getElementById("i").childNodes;
    const element = event.target=document.getElementById("ligneinfo");//.getElementById("index");
   // console.log(element.firstChild.value)
    const index = element.innerText;
   
    formData.append('index',index)
=======
    const index = event.currentTarget;
    const ligneinfo =index.parentNode.id;
   // document.getElementById("ligneinfo"+ligneinfo)
    console.log("ligneinfo: "+ligneinfo)
    //const lignes = document.getElementById("i").childNodes;
    //const element = event.target=document.getElementById("ligneinfo");//.getElementById("index");
    //console.log(element.firstChild.value)
    //const index = element.innerText;
    //console.log( document.getElementById("i").childNodes);
   // document.getElementById("ligneinfo").remove();
    //document.getElementById("ligneinfo").;
   // document.getElementById("ligneinfo").removeChild(element);
    formData.append('index',ligneinfo)
>>>>>>> 66c27ceefe916548642a7baf6c792f071a2fc1f7
    
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
function supprimerInfo(informations) {
    debugger
    console.log("pute: ",informations);
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

