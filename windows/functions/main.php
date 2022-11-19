<?php 
// Se o botão criarPasta for clicado então gere uma função que crie uma pasta
if(isset($_POST['criarPasta'])){
    // Cria uma pasta com o nome que foi passado no input
    mkdir($_POST['nomePasta']);
}