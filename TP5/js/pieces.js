const response = await fetch('../json/pieces-auto.json');
const pieces = await response.json();
// qst1: On utilise const car ces variables ne doivent pas être changées par la suite
// qst2: await permet de ne passer vers la suite du code qu'après avoir terminé son instruction
// Non, on ne peut pas se passet du wait dans ce cas, car on doit être sûrs d'avoir chargé toutes les données nécessaires avant de passer vers la suite du code

const sectionFiches = document.querySelector(".fiches");

for (const article in pieces) {
    const imageElement = document.createElement("img");
    imageElement.src = article.image;
    const nomElement = document.createElement("h2");
    nomElement.innerText = article.nom;
    const prixElement = document.createElement("p");
    prixElement.innerText = "Prix: ${article.prix} MAD";
    const categorieElement = document.createElement("p");
    categorieElement.innerText = article.categorie;

    sectionFiches.appendChild(imageElement);
    sectionFiches.appendChild(nomElement);
    sectionFiches.appendChild(prixElement);
    sectionFiches.appendChild(categorieElement);
}

document.getElementsByClassName("btn-trier")[0].addEventListener("click", function(){
    pieces.sort(function (a, b){
        return a.prix - b.prix;
    })
})

document.getElementsByClassName("btn-filtrer")[0].addEventListener("click", function(){
    const piecesFiltrees = pieces.filter(function (piece){
        return piece.prix <= 35;
    })
})

document.getElementsByClassName("btn-trier-decroissant")[0].addEventListener("click", function(){
    pieces.sort(function (a, b){
        return b.prix - a.prix;
    })
})

document.getElementsByClassName("btn-filtrer-disponible")[0].addEventListener("click", function(){
    const piecesFiltrees = pieces.filter(function (piece){
        return piece.displonibilte == "oui";
    })
})
