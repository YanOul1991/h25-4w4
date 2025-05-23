const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
const categoryTitre = document.querySelector(".destination__titre");

const paysListe = document.querySelectorAll(".pays__main .categorie__ul__li");
const paysListeParent = document.querySelector(".pays__main .pays__liste");
const paysDefaut = paysListe[0];

console.log("Default country = " + paysDefaut);

for (const element of categorie__ul__li) {
    element.addEventListener("click", fetchStuff)
}

for (const element of paysListe) {
    element.addEventListener("click", fetchStuff);
}
// console.log(document.querySelector("base").getAttribute("href"));

fetchStuff();


function fetchStuff(event) {
    let cible;

    if (event == null) {
        if (paysDefaut == null) {
            return;
        }
        cible = paysDefaut;
        cible.classList.toggle("displayed");
    }
    else {
        cible = event.target;
    }

    const targetQuery = cible.getAttribute("data-query");
    const targetSearchType = cible.getAttribute("data-search-method");
    console.log(cible);

    // const domaine = window.location.href;
    // const domaine = "/4w4/";
    const domaine = window.origin + "/4w4/";

    // const domaine = window.location.domain;

    const apiUrl = `${domaine}wp-json/wp/v2/posts?${targetSearchType}=${targetQuery}`;

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            if (targetSearchType == "categories") {
                categoryTitre.innerHTML = `Articles de la section ${(cible.innerHTML).toLowerCase()}`
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = "";
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.classList.add("destination__item");
                    articleElement.innerHTML = `
                        <h3 class="destination__item__titre">${article.title.rendered}</h3>
                        ${article.excerpt.rendered}
                        <a href="${article.link}">Lire plus</a>
                    `;
                    destinationList.appendChild(articleElement);

                    articleElement.addEventListener("click", () => {
                        articleElement.classList.toggle("displayed");
                    })
                });
            }
            else if (targetSearchType == "search") {
                paysListeParent.innerHTML = '';
                document.querySelector(".pays__main__titre").innerHTML = `Liste des destinations pour : ${cible.innerHTML}`;
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.classList.add("destination__item");
                    articleElement.innerHTML = `
                        <h3 class="destination__item__titre">${article.title.rendered}</h3>
                        ${article.excerpt.rendered}
                        <a href="${article.link}">Lire plus</a>
                    `;
                    articleElement.addEventListener("click", () => {
                        articleElement.classList.toggle("displayed");
                    })

                    paysListeParent.appendChild(articleElement);
                });
            }
        })
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
}