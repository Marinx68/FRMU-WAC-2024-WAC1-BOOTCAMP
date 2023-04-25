window.addEventListener("load", ()=>{
        const div = document.querySelector("footer").querySelector("div")
        div.addEventListener("click", ()=>{
            let person = prompt ("Quel est votre nom ?");
                while (person === "" || person === null) {
                    person = prompt ("Quel est votre nom ?");
                }
            console.log(person);
            let confirmation = prompt ("Are you sure "+person+" is your name ? ");
        alert("Hello "+person+" !");
        div.innerText = "Hello "+person+" !" ;

})})