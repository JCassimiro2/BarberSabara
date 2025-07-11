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
  <!-- Botão Hambúrguer para mobile -->
  <button class="btn-menu-hamburguer" id="btn-menu">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Menu desktop -->
  <nav class="menu-nav">
    <ul class="menu-principal">
      <li class="menu-item" id="menu-produtos">
        PRODUTOS
        <div class="mega-menu">
          <div class="menu-coluna">
            <h4>PARA BARBA</h4>
            <ul>
              <li><a href="#" class="filtro-produto" data-produto="minoxidil">Minoxidil</a></li>
              <li><a href="#" class="filtro-produto" data-produto="condicionador de barba">Condicionador de Barba</a></li>
              <li><a href="#" class="filtro-produto" data-produto="shampoo de barba">Shampoo de Barba</a></li>
              <li><a href="#" class="filtro-produto" data-produto="óleo de barba">Óleo de Barba</a></li>
            </ul>
          </div>
          <div class="menu-coluna">
            <h4>PARA CABELO</h4>
            <ul>
              <li><a href="#" class="filtro-produto" data-produto="pomada modeladora">Pasta Modeladora</a></li>
              <li><a href="#" class="filtro-produto" data-produto="shampoo anticaspa">Shampoo Anticaspa</a></li>
            </ul>
          </div>
          <div class="menu-coluna">
            <h4>PARA BARBEAR</h4>
            <ul>
              <li><a href="#" class="filtro-produto" data-produto="gel de barbear transparente">Gel de Barbear Transparente</a></li>
            </ul>
          </div>
        </div>
      </li>
      <li class="menu-item" id="menu-acessorios">
        ACESSÓRIOS
        <div class="mega-menu">
          <div class="menu-coluna">
            <h4>PENTES</h4>
            <ul>
              <li><a href="#" class="filtro-categoria" data-categoria="pente">Pentes de Madeira</a></li>
            </ul>
          </div>
        </div>
      </li>
      <li class="menu-item" id="menu-promocoes">PROMOÇÕES</li>
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
        <li><a href="#" class="filtro-produto" data-produto="minoxidil">Minoxidil</a></li>
        <li><a href="#" class="filtro-produto" data-produto="condicionador de barba">Condicionador de Barba</a></li>
        <li><a href="#" class="filtro-produto" data-produto="shampoo de barba">Shampoo de Barba</a></li>
        <li><a href="#" class="filtro-produto" data-produto="óleo de barba">Óleo de Barba</a></li>
        <li><a href="#" class="filtro-produto" data-produto="shampoo anticaspa">Shampoo com Carvão Ativado</a></li>
        <li><a href="#" class="filtro-produto" data-produto="pomada modeladora">Pasta Modeladora</a></li>
        <li><a href="#" class="filtro-produto" data-produto="gel de barbear transparente">Gel de Barbear Transparente</a></li>
      </ul>
    </li>
    <li class="item-lateral" id="acessorios-lateral">
      ACESSÓRIOS
      <ul class="submenu-lateral" id="submenu-acessorios">
        <li><a href="#" class="filtro-categoria" data-categoria="pente">Pentes de Madeira</a></li>
      </ul>
    </li>
    <li class="item-lateral" id="promocoes-lateral">PROMOÇÕES</li>
  </ul>
</aside>   

<!-- Campo de pesquisa -->
<div class="container text-center my-4">
  <input type="text" id="campo-pesquisa" class="form-control mx-auto w-50" placeholder="Pesquisar produtos..." oninput="pesquisarProduto()">
  <p id="mensagem-nao-encontrado" class="text-danger mt-2" style="display: none;">Nenhum produto encontrado.</p>
</div>

<div id="mensagem-filtro" class="text-center mt-4 fw-bold" style="display: none;"></div> 

<!-- Produtos -->
<div class="container my-5">
  <div class="row justify-content-center g-4" id="lista-produtos">
    <div class="col-6 col-sm-4 col-md-3 produto" data-nome="pomada modeladora" data-categoria="pomada modeladora">
      <div class="card h-100 text-center border-0 shadow-sm">
        <img src="imagens/pomada.jpg" class="card-img-top" alt="Pomada Modeladora">
        <div class="card-body">
          <h5 class="card-title nome-produto">Pomada Modeladora</h5>
          <p class="card-text descricao-produto">Alta fixação e brilho médio.</p>
          <p class="preco">R$ 29,90</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 produto" data-nome="minoxidil" data-categoria="minoxidil">
      <div class="card h-100 text-center border-0 shadow-sm">
        <img src="imagens/Minoxidil.jpg" class="card-img-top" alt="Minoxidil">
        <div class="card-body">
          <h5 class="card-title nome-produto">Minoxidil 60ml</h5>
          <p class="card-text descricao-produto">Crescimento da barba.</p>
          <p class="preco">R$ 79,90</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 produto" data-nome="hidratente" data-categoria="hidratante">
      <div class="card h-100 text-center border-0 shadow-sm">
        <img src="imagens/balm.jpg" class="card-img-top" alt="Hidratente">
        <div class="card-body">
          <h5 class="card-title nome-produto">Hidratante Balm 120ml</h5>
          <p class="card-text descricao-produto">Modela, Hidrata sua barba.</p>
          <p class="preco">R$ 29,90</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 produto" data-nome="shampoo anticaspa" data-categoria="shampoo anticaspa">
      <div class="card h-100 text-center border-0 shadow-sm">
        <img src="imagens/shampoo.jpg" class="card-img-top" alt="Shampoo Anticaspa">
        <div class="card-body">
          <h5 class="card-title nome-produto">Shampoo Anticaspa Fox</h5>
          <p class="card-text descricao-produto">Fórmula refrescante.</p>
          <p class="preco">R$ 29,90</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 produto" data-nome="shampoo" data-categoria="shampoo">
      <div class="card h-100 text-center border-0 shadow-sm">
        <img src="imagens/shampoeminoxidil.jpg" class="card-img-top" alt="Shampoo">
        <div class="card-body">
          <h5 class="card-title nome-produto">Shampoo com Minoxidil</h5>
          <p class="card-text descricao-produto">Shampoo com minoxidil.</p>
          <p class="preco">R$ 29,90</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 produto" data-nome="pomada" data-categoria="pomada">
      <div class="card h-100 text-center border-0 shadow-sm">
        <img src="imagens/pomada em pó.jpg" class="card-img-top" alt="Pomada">
        <div class="card-body">
          <h5 class="card-title nome-produto">Pomada Modeladora em Pó</h5>
          <p class="card-text descricao-produto">Pomada em Pó.</p>
          <p class="preco">R$ 24,90</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 produto" data-nome="condicionador de barba" data-categoria="condicionador de barba">
      <div class="card h-100 text-center border-0 shadow-sm">
        <img src="imagens/condicionadorbarba.jpg" class="card-img-top" alt="Condicionador de Barba">
        <div class="card-body">
          <h5 class="card-title nome-produto">Condicionador de Barba</h5>
          <p class="card-text descricao-produto">Fechar poros.</p>
          <p class="preco">R$ 29,90</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 produto" data-nome="shampoo de barba" data-categoria="shampoo de barba">
      <div class="card h-100 text-center border-0 shadow-sm">
        <img src="imagens/Shampoobarba.jpg" class="card-img-top" alt="Shampoo de Barba">
        <div class="card-body">
          <h5 class="card-title nome-produto">Shampoo de Barba</h5>
          <p class="card-text descricao-produto">Abrir poros</p>
          <p class="preco">R$ 29,90</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 produto" data-nome="óleo de barba" data-categoria="óleo de barba">
      <div class="card h-100 text-center border-0 shadow-sm">
        <img src="imagens/oleobarba.jpg" class="card-img-top" alt="Óleo de Barba">
        <div class="card-body">
          <h5 class="card-title nome-produto">Óleo de Barba</h5>
          <p class="card-text descricao-produto">Fórmula de maciez.</p>
          <p class="preco">R$ 29,90</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 produto" data-nome="gel de barbear transparente" data-categoria="gel de barbear transparente">
      <div class="card h-100 text-center border-0 shadow-sm">
        <img src="imagens/gelbarbear.jpg" class="card-img-top" alt="Gel de Barbear Transparente">
        <div class="card-body">
          <h5 class="card-title nome-produto">Gel de Barbear Transparente</h5>
          <p class="card-text descricao-produto">Fórmula refrescante.</p>
          <p class="preco">R$ 19,90</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 produto" data-nome="pente" data-categoria="pente">
      <div class="card h-100 text-center border-0 shadow-sm">
        <img src="imagens/pentemadeira.jpg" class="card-img-top" alt="Pente de Madeira">
        <div class="card-body">
          <h5 class="card-title nome-produto">Pente de Madeira</h5>
          <p class="card-text descricao-produto">Bom para barba</p>
          <p class="preco">R$ 9,90</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 produto" data-nome="caixa de minoxidil" data-categoria="minoxidil">
      <div class="card h-100 text-center border-0 shadow-sm">
        <img src="imagens/caixaminoxidil.jpg" class="card-img-top" alt="Caixa de Minoxidil">
        <div class="card-body">
          <h5 class="card-title nome-produto">Caixa de Minoxidil</h5>
          <p class="card-text descricao-produto">Contém 6 unidades de 60ml</p>
          <p class="preco">R$ 199,90</p>
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

  // Toggle submenu ACESSÓRIOS no menu lateral
  const acessoriosLateral = document.getElementById('acessorios-lateral');
  const submenuAcessorios = document.getElementById('submenu-acessorios');

  acessoriosLateral.addEventListener('click', () => {
    submenuAcessorios.classList.toggle('aberto');
  });

  // Função para mostrar todos produtos
  function mostrarTodos() {
    const produtos = document.querySelectorAll('.produto');
    produtos.forEach(produto => {
      produto.style.display = 'block';
    });
    document.getElementById('mensagem-filtro').style.display = 'none';
  }

          // Função para mostrar mensagem de promoções
          function mostrarPromocoes() {
    const produtos = document.querySelectorAll('.produto');
    produtos.forEach(produto => {
      produto.style.display = 'none';
    });
    const mensagemFiltro = document.getElementById('mensagem-filtro');
    mensagemFiltro.textContent = 'Não há produtos em promoção.';
    mensagemFiltro.style.color = 'red';
    mensagemFiltro.style.display = 'block';
  }

  // Função para filtrar produtos por nome
  function filtrarProduto(nomeProduto) {
    const produtos = document.querySelectorAll('.produto');
    let encontrou = false;
    produtos.forEach(produto => {
      const nome = produto.getAttribute('data-nome').toLowerCase();
      if (nome.includes(nomeProduto.toLowerCase())) {
        produto.style.display = 'block';
        encontrou = true;
      } else {
        produto.style.display = 'none';
      }
    });
    const mensagemFiltro = document.getElementById('mensagem-filtro');
    mensagemFiltro.style.display = 'none';

    if (!encontrou) {
      mensagemFiltro.textContent = 'Nenhum produto encontrado.';
      mensagemFiltro.style.color = 'red';
      mensagemFiltro.style.display = 'block';
    }
  }

  // Função para filtrar produtos por categoria
  function filtrarCategoria(categoria) {
    const produtos = document.querySelectorAll('.produto');
    let encontrou = false;
    produtos.forEach(produto => {
      const cat = produto.getAttribute('data-categoria').toLowerCase();
      if (cat === categoria.toLowerCase()) {
        produto.style.display = 'block';
        encontrou = true;
      } else {
        produto.style.display = 'none';
      }
    });
    const mensagemFiltro = document.getElementById('mensagem-filtro');
    mensagemFiltro.style.display = 'none';

    if (!encontrou) {
      mensagemFiltro.textContent = 'Nenhum produto encontrado.';
      mensagemFiltro.style.color = 'red';
      mensagemFiltro.style.display = 'block';
    }
  }

  // Eventos dos menus desktop
  document.getElementById('menu-produtos').addEventListener('click', (e) => {
    e.preventDefault();
    mostrarTodos();
  });

  document.getElementById('menu-acessorios').addEventListener('click', (e) => {
    e.preventDefault();
    filtrarCategoria('pente');
  });

  document.getElementById('menu-promocoes').addEventListener('click', (e) => {
    e.preventDefault();
    mostrarPromocoes();
  });

  // Eventos dos menus laterais
  document.getElementById('produtos-lateral').addEventListener('click', (e) => {
    e.preventDefault();
    mostrarTodos();
  });

  document.getElementById('acessorios-lateral').addEventListener('click', (e) => {
    e.preventDefault();
    filtrarCategoria('pente');
  });

  document.getElementById('promocoes-lateral').addEventListener('click', (e) => {
    e.preventDefault();
    mostrarPromocoes();
  });

  // Eventos para os links de filtro por produto (desktop e lateral)
  const filtrosProduto = document.querySelectorAll('.filtro-produto');
  filtrosProduto.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const produto = link.getAttribute('data-produto');
      filtrarProduto(produto);
    });
  });

  // Eventos para os links de filtro por categoria (desktop e lateral)
  const filtrosCategoria = document.querySelectorAll('.filtro-categoria');
  filtrosCategoria.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const categoria = link.getAttribute('data-categoria');
      filtrarCategoria(categoria);
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
