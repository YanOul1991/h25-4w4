const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");

for (const element of categorie__ul__li) {
    element.addEventListener("click", fetchStuff)
}

// function parcourir_btn() {
//     // categorie__ul__li.forEach(element => {
//     //     element.addEventListener("click", fetchStuff(element))
//     // })
// }

// parcourir_btn();

// (function () {
//     console.log("WEE-WOO!!!");
//     const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
//     const domaine = window.location.href;
//     const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
//     console.log("DOMAINE: " + domaine);
//     console.log("URL: " + apiUrl);

//     parcourir_btn();

//     fetch(apiUrl)
//         .then(response => response.json())
//         .then(data => {
//             const destinationList = document.querySelector('.destination__list');
//             data.forEach(article => {
//                 const articleElement = document.createElement('div');
//                 console.log(article.title.rendered);
//                 // article.excerpt.rendered
//                 articleElement.innerHTML = `
//                     <h3>${article.title.rendered}</h3>
//                     <div>${article.excerpt.rendered}</div>
//                     <a href="${article.link}">Lire plus</a>
//                 `;
//                 destinationList.appendChild(articleElement);
//             });
//         })
//         .catch(error => console.error('Erreur lors de la récupération des articles:', error));
// })()

function fetchStuff(event) {
    console.log(event.target);

    const categoryId = event.target.getAttribute("data-categoryID"); // Remplacez par l'ID de la catégorie souhaitée
    const domaine = window.location.href;
    const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            const destinationList = document.querySelector('.destination__list');
            destinationList.innerHTML = '';
            data.forEach(article => {
                const articleElement = document.createElement('div');
                // console.log(article.title.rendered);
                // article.excerpt.rendered
                articleElement.innerHTML = `
                    <h3>${article.title.rendered}</h3>
                    <div>${article.excerpt.rendered}</div>
                    <a href="${article.link}">Lire plus</a>
                `;
                destinationList.appendChild(articleElement);
            });
        })
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
}

