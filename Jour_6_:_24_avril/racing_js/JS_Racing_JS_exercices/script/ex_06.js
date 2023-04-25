window.addEventListener("load", ()=>{
    const div = document.querySelector("footer").querySelector("div");

   fetch ('https://data.education.gouv.fr/api/v2/catalog/datasets/fr-en-annuaire-education/records?select=nom_commune%2C%20nom_etablissement%2C%20mail%20&limit=25');
   .then((response) => {
        response = response.json();
        return response;
   })
   .then((data) => {
    console.log(data.records);
    let paramValues = "";
    let table = data.records;
    for (let i = 0; i < table.length; i++) {
        //une condition a mttre
    }
    div.innerText = paramValues;
   })

});