
const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");

const categoryTitre = document.querySelector(".destination__titre");

categoryTitre.innerHTML = "";

for (const element of categorie__ul__li) {
    element.addEventListener("click", fetchStuff)
}

function fetchStuff(event) {
    const categoryId = event.target.getAttribute("data-categoryID");

    const domaine = window.location.href;

    const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            categoryTitre.innerHTML = `Articles de la section ${(event.target.innerHTML).toLowerCase()}`

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
            });
        })
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
}