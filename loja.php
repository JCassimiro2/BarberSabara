<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Loja - BarbeariaSabará</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="css/styleLoja.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>  
<header class="loja-header">
  <a href="index.php" class="voltar-btn">Voltar</a>
  <img src="sua-logo.png" alt="Logo BarberSabará" class="logo-loja">

  <!-- Botão Hambúrguer para mobile -->
  <button class="btn-menu-hamburguer" id="btn-menu">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Menu desktop -->
  <nav class="menu-nav">
    <ul class="menu-principal">
      <li class="menu-item">
        PRODUTOS
        <div class="mega-menu">
          <div class="menu-coluna">
            <h4>PARA BARBA</h4>
            <ul>
              <li><a href="#">Minoxidil</a></li>
              <li><a href="#">Condicionador de Barba</a></li>
              <li><a href="#">Shampoo de Barba</a></li>
              <li><a href="#">Óleo de Barba</a></li>
              <li><a href="#">Modelador de Barba</a></li>
            </ul>
          </div>
          <div class="menu-coluna">
            <h4>PARA CABELO</h4>
            <ul>
              <li><a href="#">Pasta Modeladora</a></li>
            </ul>
          </div>
          <div class="menu-coluna">
            <h4>PARA BARBEAR</h4>
            <ul>
              <li><a href="#">Gel de Barbear Transparente</a></li>
            </ul>
          </div>
        </div>
      </li>
      <li class="menu-item">ACESSÓRIOS</li>
      <li class="menu-item">ECONOMIZE</li>
    </ul>
  </nav>
</header>

<!-- Painel lateral do menu hambúrguer -->
<aside class="painel-lateral" id="painel-lateral">
  <button class="btn-fechar" id="btn-fechar"><i class="fas fa-times"></i></button>
  <ul class="menu-lateral">
    <li class="item-lateral" id="produtos-lateral">
      PRODUTOS
      <ul class="submenu-lateral" id="submenu-produtos">
        <li><a href="#">Minoxidil</a></li>
        <li><a href="#">Condicionador de Barba</a></li>
        <li><a href="#">Shampoo de Barba</a></li>
        <li><a href="#">Óleo de Barba</a></li>
        <li><a href="#">Modelador de Barba</a></li>
        <li><a href="#">Shampoo com Carvão Ativado</a></li>
        <li><a href="#">Máscara de Hidratação</a></li>
        <li><a href="#">Pasta Modeladora</a></li>
        <li><a href="#">Gel de Barbear Transparente</a></li>
      </ul>
    </li>
    <li class="item-lateral">
      ACESSÓRIOS
       <ul class="submenu-lateral" id="submenu-produtos">
        <li><a href="#">Pentes de Madeira</a></li>
      </ul>
    </li>
    <li class="item-lateral">ECONOMIZE</li>
  </ul>
</aside>

<!-- Campo de pesquisa -->
<div class="container text-center my-4">
  <input type="text" id="campo-pesquisa" class="form-control mx-auto w-50" placeholder="Pesquisar produtos..." oninput="pesquisarProduto()">
  <p id="mensagem-nao-encontrado" class="text-danger mt-2" style="display: none;">Nenhum produto encontrado.</p>
</div>

<!-- Produtos -->
<div class="container my-5">
  <div class="row justify-content-center g-4" id="lista-produtos">
    <div class="col-6 col-sm-4 col-md-3 produto pomada">
      <div class="card h-100 text-center border-0 shadow-sm">
        <img src="img/produto1.png" class="card-img-top" alt="Pomada Modeladora">
        <div class="card-body">
          <h5 class="card-title nome-produto">Pomada Modeladora</h5>
          <p class="card-text descricao-produto">Alta fixação e brilho médio.</p>
          <p class="h6 text-primary">R$ 29,90</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 produto minoxidil">
      <div class="card h-100 text-center border-0 shadow-sm">
        <img src="img/produto2.png" class="card-img-top" alt="Minoxidil">
        <div class="card-body">
          <h5 class="card-title nome-produto">Minoxidil</h5>
          <p class="card-text descricao-produto">Crescimento da barba.</p>
          <p class="h6 text-success">R$ 79,90</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 produto shampoo">
      <div class="card h-100 text-center border-0 shadow-sm">
        <img src="img/produto3.png" class="card-img-top" alt="Shampoo Anticaspa">
        <div class="card-body">
          <h5 class="card-title nome-produto">Shampoo Anticaspa</h5>
          <p class="card-text descricao-produto">Fórmula refrescante.</p>
          <p class="h6 text-warning">R$ 29,90</p>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Pesquisa produtos
  function pesquisarProduto() {
    let input = document.getElementById('campo-pesquisa').value.toLowerCase();
    let produtos = document.querySelectorAll('.produto');
    let mensagemNaoEncontrado = document.getElementById('mensagem-nao-encontrado');
    let produtosEncontrados = false;

    produtos.forEach(function(produto) {
      let nome = produto.querySelector('.nome-produto')?.textContent.toLowerCase() || '';
      let descricao = produto.querySelector('.descricao-produto')?.textContent.toLowerCase() || '';

      if (nome.includes(input) || descricao.includes(input)) {
        produto.classList.remove('d-none');
        produtosEncontrados = true;
      } else {
        produto.classList.add('d-none');
      }
    });

    mensagemNaoEncontrado.style.display = produtosEncontrados ? 'none' : 'block';
  }

  // Menu hamburguer lateral toggle
  const btnMenu = document.getElementById('btn-menu');
  const painelLateral = document.getElementById('painel-lateral');
  const btnFechar = document.getElementById('btn-fechar');

  btnMenu.addEventListener('click', () => {
    painelLateral.classList.add('aberto');
  });

  btnFechar.addEventListener('click', () => {
    painelLateral.classList.remove('aberto');
  });

  // Toggle submenu PRODUTOS no menu lateral
  const produtosLateral = document.getElementById('produtos-lateral');
  const submenuProdutos = document.getElementById('submenu-produtos');

  produtosLateral.addEventListener('click', () => {
    submenuProdutos.classList.toggle('aberto');
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
