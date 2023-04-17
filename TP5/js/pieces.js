const response = await fetch('json/pieces-autos.json');
const pieces = await response.json();
// qst1: On utilise const car ces variables ne doivent pas être changées par la suite
// qst2: await permet de ne passer vers la suite du code qu'après avoir terminé son instruction
// Non, on ne peut pas se passet du wait dans ce cas, car on doit être sûrs d'avoir chargé toutes les données nécessaires avant de passer vers la suite du code

let pieces_clone = [...pieces];

const sectionFiches = document.querySelector(".fiches");

function refresh() {
    sectionFiches.innerHTML = "";
    pieces_clone.forEach(article => {
        const imageElement = document.createElement("img");
        imageElement.src = article.image;
        const nomElement = document.createElement("h2");
        nomElement.innerText = article.nom;
        const prixElement = document.createElement("p");
        prixElement.innerText = "Prix: " + article.prix + " MAD";
        const categorieElement = document.createElement("p");
        categorieElement.innerText = article.categorie;

        sectionFiches.appendChild(imageElement);
        sectionFiches.appendChild(nomElement);
        sectionFiches.appendChild(prixElement);
        sectionFiches.appendChild(categorieElement);

    });

}

document.getElementsByTagName("body")[0].addEventListener("load", refresh());

document.getElementsByClassName("btn-trier")[0].addEventListener("click", function () {
    pieces_clone = [...pieces];
    pieces_clone.sort(function (a, b) {
        return a.prix - b.prix;
    });
    refresh();
})

document.getElementsByClassName("btn-filtrer")[0].addEventListener("click", function () {
    pieces_clone = [...pieces];
    pieces_clone.filter(function (piece) {
        return piece.prix >= 200;
    });
    refresh();
})

document.getElementsByClassName("btn-trier-decroissant")[0].addEventListener("click", function () {
    pieces_clone = [...pieces];
    pieces_clone.sort(function (a, b) {
        return b.prix - a.prix;
    });
    refresh();
})

document.getElementsByClassName("btn-filtrer-disponible")[0].addEventListener("click", function () {
    pieces_clone = [...pieces];
    pieces_clone = pieces_clone.filter(function (piece) {
        return piece.disponibilite == "oui";
    });
    refresh();
})

document.getElementById("prix").addEventListener("input", function(){
    document.getElementById("prixchoix").innerHTML = document.getElementById("prix").value + " DHs";
    pieces_clone = [...pieces];
    pieces_clone = pieces_clone.filter(function (piece) {
        return piece.prix <= document.getElementById("prix").value;
    });
    refresh();
})
