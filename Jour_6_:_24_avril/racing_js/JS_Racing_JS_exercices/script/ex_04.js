window.addEventListener("load", ()=>{
    const div = document.querySelector("footer").querySelector("div");
    let string = '';
    window.addEventListener("keypress", (event)=>{
        console.log(event.key);
        if (event.key.length == 1) {
            string += event.key;
            div.innerText = string.slice(-42);
       }
    })
})
