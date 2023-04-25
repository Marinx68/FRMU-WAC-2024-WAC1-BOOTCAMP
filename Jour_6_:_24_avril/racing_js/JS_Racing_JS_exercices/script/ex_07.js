window.addEventListener("load", () => {
    const buttons = document.querySelectorAll("footer div button");
    const div = document.querySelector("canvas");
    const audio = new Audio("triangle.ogg");
    
    var buttonpause = buttons[0];
    var buttonarret = buttons[1];
    var buttonmuet = buttons[2];

  if (div.getContext) {
    const ctx = div.getContext("2d");
    const wight = div.width;
    const length = div.height;
    div.style.backgroundColor = "white";
