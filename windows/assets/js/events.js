//QuerySelectors
const iconsDesk = document.querySelector(".icon_rename");
const draggableIcon = document.querySelector(".draggableIcon");
const container = document.querySelector(".container");
const clickRight = document.querySelector(".menu_right_clique");
const menuIniciar = document.querySelector(".menu_windows__logo");
const openMenu = document.querySelector(".menu_iniciar");
const chrome = document.querySelector(".chrome");
const fechaChrome = document.querySelector(".fecha_chrome");
const maximizarChrome = document.querySelector(".maximizar_chrome");
const minimizarChrome = document.querySelector(".minimizar_chrome");
const janelaChrome = document.querySelector(".janela");
const janelaVscode = document.querySelector(".janela_vscode");
const vscode = document.querySelector(".vscode");
const fechaVscode = document.querySelector(".fecha_vscode");
const maximizarVscode = document.querySelector(".maximizar_vscode");
const minimizarVscode = document.querySelector(".minimizar_vscode");

// Load site
const i = setInterval(function () {
  clearInterval(i);
  // O código desejado é apenas isto:
  document.getElementById("load").style.display = "none";
  document.querySelector("section").style.display = "block";
}, 8000);

//Eventos dos icones
iconsDesk.addEventListener("click", function () {
  document.querySelector(".icon_rename span").contentEditable = "true";
});


// Eventos de click botão direito
container.addEventListener("contextmenu", function (e) {
  e.preventDefault();
  clickRight.style.display = "block";
  // pega a posição do mouse
  clickRight.style.left = e.pageX + "px";
  clickRight.style.top = e.pageY + "px";
});
container.addEventListener("click", function (e) {
  e.preventDefault();
  if (e.offsetX > 340) {
    clickRight.style.display = "none";
  }
});

// Lista de items
const items = [
  {
    name: "Exibir"
  },
  {
    name: "Classificar por"
  },
  {
    name: "Atualizar"
  },
  {
    name: "Colar"
  },
  {
    name: "Criar pasta"
  }
];

// Lista os items dentro uma ul
const listItems = document.querySelector(".links");
items.forEach((item) => {
  listItems.innerHTML += `
    <li class="item">
      <button type="submit" name="criarPasta">${item.name}</button>
    </li>
  `;
});
//Menu iniciar
menuIniciar.addEventListener("click", function (e) {
  e.preventDefault();
  openMenu.style.display = "block";
  openMenu.style.animation = "fadeIn 5s";
  menuIniciar.addEventListener("dblclick", function (e) {
    e.preventDefault();
    openMenu.style.display = "none";
  });
});
//Eventos Janela Chrome

chrome.addEventListener("click", function (e) {
  e.preventDefault();
  janelaChrome.style.display = "block";
});

fechaChrome.addEventListener("click", function (e) {
  e.preventDefault();
  janelaChrome.style.display = "none";
});

maximizarChrome.addEventListener("click", function (e) {
  e.preventDefault();
  janelaChrome.style.width = "100%";
  janelaChrome.style.height = "100%";
  janelaChrome.style.top = "0";
  janelaChrome.style.left = "0";
});

minimizarChrome.addEventListener("click", function (e) {
  e.preventDefault();
  document.querySelector(".janela").style.display = "none";
});
// Janela VScode
vscode.addEventListener("click", function (e) {
  e.preventDefault();
  janelaVscode.style.display = "block";
});

fechaVscode.addEventListener("click", function (e) {
  e.preventDefault();
  janelaVscode.style.display = "none";
});

janelaVscode.addEventListener("mousedown", function (e) {
  e.preventDefault();
  const x = e.clientX - janelaVscode.offsetLeft;
  const y = e.clientY - janelaVscode.offsetTop;
  window.addEventListener("mousemove", move);
  function move(e) {
    janelaVscode.style.left = e.clientX - x + "px";
    janelaVscode.style.top = e.clientY - y + "px";
  }
  janelaVscode.addEventListener("mouseup", function () {
    window.removeEventListener("mousemove", move);
  });
});
