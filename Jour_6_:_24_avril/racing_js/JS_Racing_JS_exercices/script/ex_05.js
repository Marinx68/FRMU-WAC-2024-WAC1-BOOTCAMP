window.addEventListener("load", ()=>{
    const buttons = document.querySelector("footer").querySelector("div").querySelectorAll('button');
    const body = document.querySelector("body");
    const select = document.querySelector("footer").querySelector("div").querySelector("select");
    const div = document.querySelector("footer").querySelector("div");

    var buttonplus = buttons[0];
    var buttonmoins = buttons[1];
    var taille = 16;
    
    buttonplus.addEventListener("click", (event)=>{
        taille++;
        body.style.fontSize = taille + "px";
    })
    buttonmoins.addEventListener("click", (event)=>{
        if (size > 1) {
            size--;
            body.style.fontSize = size + "px"; 
        }
    })

    select.addEventListener("input", (event) => {
        var color = event.target.value;
        div.style.backgroundColor = color;
    })
});