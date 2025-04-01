(function () {
  console.log("destination.js");
  const domaine = window.location.href;



  const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
  categorie__ul__li.forEach((li) => {
    li.addEventListener("click", function () {
      let categoryId = li.getAttribute("data-category-id");
      // console.log(id);
      const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
  console.log(apiUrl);
  mon_fetch(apiUrl);

    });
  });


  // const categoryId = 4; // Remplacez par l'ID de la catégorie souhaitée

  

  /**
   * mon_fetch permet d'extraire les destination de diferrent categorie
   * @param {mon_fetch} apiUrl 
   */

function mon_fetch(apiUrl) {

  fetch(apiUrl)
    .then((response) => response.json())
    .then((data) => {
      const destinationList = document.querySelector(".destination__list");
      destinationList.innerHTML = ""; // Vider la liste avant d'ajouter de nouveaux articles
      data.forEach((article) => {
        const articleElement = document.createElement("div");
        articleElement.innerHTML = `
                    <h4>${article.title.rendered}</h4>
                    <div class="card__description">${article.excerpt.rendered}</div>
                    <a href="${article.link}">Lire plus</a>
                `;
        destinationList.appendChild(articleElement);
      });
    })
    .catch((error) =>
      console.error("Erreur lors de la récupération des articles:", error)
    );
  }
})();
