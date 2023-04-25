window.addEventListener("load", ()=>{
    const div = document.querySelector("footer").querySelector("div");

div.addEventListener("click", ()=>{
        count += 1;
        div.innerText = count;
});

let count = 0; 
})