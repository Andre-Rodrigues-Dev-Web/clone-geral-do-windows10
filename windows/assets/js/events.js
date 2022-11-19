// Eventos de click botão direit
const container = document.querySelector(".container");
container.addEventListener("contextmenu", function (e) {
  e.preventDefault();
  document.querySelector(".menu_right_clique").style.display = "block";
  // pega a posição do mouse
  document.querySelector(".menu_right_clique").style.left = e.pageX + "px";
  document.querySelector(".menu_right_clique").style.top = e.pageY + "px";
});
container.addEventListener("click", function (e) {
  e.preventDefault();
  if (e.offsetX > 340) {
    document.querySelector(".menu_right_clique").style.display = "none";
  }
});

// Lista json de items
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
const menuIniciar = document.querySelector(".menu_windows__logo");
menuIniciar.addEventListener("click", function (e) {
  e.preventDefault();
  document.querySelector(".menu_iniciar").style.display = "block";
  document.querySelector(".menu_iniciar").style.animation = "fadeIn 5s";
  menuIniciar.addEventListener("dblclick", function (e) {
    e.preventDefault();
    document.querySelector(".menu_iniciar").style.display = "none";
  });
});
