<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BarbeariaSabará</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <div id="transicao" style="display: none;"></div>
  <div id="conteudo-principal">
    <header class="reveal bg-dark text-white py-2 shadow-sm custom-header">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
              <img src="imagens/LogoBarbearia.png" alt="Barbearia Sabará" class="logo-img me-2">
              <span class="fs-4 fw-bold">Barbearia Sabará</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="#estabelecimento">Estabelecimento</a></li>
                <li class="nav-item"><a class="nav-link" href="#Galeria">Galeria</a></li>
                <li class="nav-item"><a class="nav-link" href="#feedback">Feedback</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <section class="reveal py-5 bg-light" id="servicos">
      <div class="container">
        <div class="row g-4 justify-content-center">
          <div class="col-md-6 col-lg-5">
            <div class="card h-100" id="servico1">
              <div class="card-body">
                <h2 class="card-title">Loja</h2>
                <p class="card-text">Veja os produtos que vendemos em nossa barbearia</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-5">
            <div class="card h-100" id="servico2">
              <div class="card-body">
                <h2 class="card-title">Serviços</h2>
                <p class="card-text">Veja os preços dos cortes e horários disponíveis!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sobre reveal py-5" id="sobre">
      <div class="container text-center">
        <h2>Veja um pouco sobre Mim</h2>
        <div class="row justify-content-center align-items-center my-4">
          <div class="col-12 col-md-4">
            <div class="foto-sobre mx-auto"></div>
          </div>
        </div>  
        <p class="Sobre-mim">Gosto de cuidar do meu visual, saúde e me divertir com os amigos,<br> sou focado em resultados e desempenho,
          tenho como objetivo<br> ser reconhecido profissionalmente, e procuro sempre aprendizado<br> para conseguir realizar o que meus clientes desejam,
          <br> sempre deixando-os a vontade em meu espaço de trabalho</p>
      </div>
    </section>

    <section class="reveal py-5" id="estabelecimento">
  <div class="container">
    <h2 class="text-center mb-4">Sobre nosso estabelecimento</h2>
    <div class="row justify-content-center align-items-center">
      <div class="col-md-5 mb-4 text-center">
        <div class="foto-estab-esquerda mx-auto">
          <img src="imagens/estabelecimento.jpeg" alt="Dono da Barbearia" class="img-fluid rounded shadow">
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-estab text-center text-md-start">
          <p>
            Este é o nosso espaço! Um ambiente moderno, confortável e pensado para proporcionar a melhor experiência aos nossos clientes. Venha nos visitar e sinta o cuidado em cada detalhe!
          </p>
        </div>
      </div>
    </div>
  </div>    
</section>


    <section class="galeria" id="Galeria">
      <div class="container">
        <h2 class="text-center mb-4">Nossa Galeria</h2>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">

            <div class="carousel-item active text-center">
              <img src="imagens/americano.jpg" class="d-block w-100 corte-img-carousel" alt="Americano"
                   data-bs-toggle="modal" data-bs-target="#imagemModal" data-src="imagens/americano.jpg">
              <p class="nome-corte-carousel">Americano</p>
            </div>

            <div class="carousel-item text-center">
              <img src="imagens/lowfade.jpg" class="d-block w-100 corte-img-carousel" alt="Low-Fade"
                   data-bs-toggle="modal" data-bs-target="#imagemModal" data-src="imagens/lowfade.jpg">
              <p class="nome-corte-carousel">Low Fade</p>
            </div>

            <div class="carousel-item text-center">
              <img src="imagens/midfade.jpg" class="d-block w-100 corte-img-carousel" alt="Mid-Fade"
                   data-bs-toggle="modal" data-bs-target="#imagemModal" data-src="imagens/midfade.jpg">
              <p class="nome-corte-carousel">Mid Fade</p>
            </div>

            <div class="carousel-item text-center">
              <img src="imagens/buzzcut.jpg" class="d-block w-100 corte-img-carousel" alt="Buzz Cut"
                   data-bs-toggle="modal" data-bs-target="#imagemModal" data-src="imagens/buzzcut.jpg">
              <p class="nome-corte-carousel">Buzz Cut</p>
            </div>

            <div class="carousel-item text-center">
              <img src="imagens/highfade.jpg" class="d-block w-100 corte-img-carousel" alt="High-Fade"
                   data-bs-toggle="modal" data-bs-target="#imagemModal" data-src="imagens/highfade.jpg">
              <p class="nome-corte-carousel">High Fade</p>
            </div>

          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
          </button>
        </div>
      </div>

      <!-- Modal para ampliar imagem -->
      <div class="modal fade" id="imagemModal" tabindex="-1" aria-labelledby="imagemModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0">
              <img src="" id="imagemModalSrc" class="img-fluid rounded" alt="Imagem ampliada" />
            </div>
            <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Fechar"></button>
          </div>
        </div>
      </div>
    </section>

    <!-- Formulário único, funcionando e com mensagem de sucesso -->
    <section class="mensagem" id="feedback">
      <h2>Deixe seu Feedback</h2>
      <form action="processa_feedback.php#feedback" method="POST" id="form-feedback">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="feedback" placeholder="Digite seu feedback" rows="5" required></textarea>
        <button type="submit">Enviar</button>
      </form>

      <?php
        if (isset($_GET['sucesso']) && $_GET['sucesso'] === 'true') {
          echo '
          <div id="mensagem-enviada" class="mensagem-enviada">
            ✅ Enviado com sucesso!
          </div>';
        }
      ?>
    </section>
  </div>

  <footer class="bg-dark text-white py-4">
    <div class="container">
      <div class="row text-center text-md-start align-items-center">
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="footer-item">
            <span>📷</span>
            <a href="https://www.instagram.com/msabara_/" target="_blank">msabara_</a>
          </div>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <p class="footer-mensagem mb-0">Venha conhecer<br>nosso estabelecimento!</p>
        </div>
        <div class="col-md-4">
          <div class="footer-item">
            <span>📍</span>
            <a href="https://www.google.com/maps?q=Av+Curitiba,+725+(sala01)" target="_blank">Av Curitiba , 725 (sala01)</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script>
    // animação de scroll
    function reveal() {
      var reveals = document.querySelectorAll('.reveal');
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 100;
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add('active');
        } else {
          reveals[i].classList.remove('active');
        }
      }
    }
    window.addEventListener('scroll', reveal);
    reveal();
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const logo = document.querySelector('.logo-img');
      logo.addEventListener('click', function (e) {
        e.preventDefault(); // evita comportamento padrão do link
        
        // Atualiza a imagem com timestamp pra evitar cache
        const srcOriginal = this.getAttribute('src').split('?')[0];
        this.setAttribute('src', srcOriginal + '?t=' + new Date().getTime());

        // Scroll para o topo suave
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    });
  </script>

  <script>
    window.addEventListener('DOMContentLoaded', () => {
      const msg = document.getElementById('mensagem-enviada');
      if (msg) {
        setTimeout(() => {
          msg.style.display = 'none';
        }, 5000);
      }
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      document.getElementById('servico1').addEventListener('click', function () {
        window.location.href = 'loja.php';
      });

      document.getElementById('servico2').addEventListener('click', function () {
        window.location.href = 'Serviços.php';
      });
    });
  </script>

  <script>
    document.querySelectorAll('a[href="loja.php"], a[href="servicos.php"]').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const destino = this.getAttribute('href');

        // Cria e insere o overlay da animação
        const transicao = document.createElement('div');
        transicao.classList.add('pagina-transicao');
        document.body.appendChild(transicao);

        // Aguarda a animação e redireciona
        setTimeout(() => {
          window.location.href = destino;
        }, 800);
      });
    });
  </script>

  <script>
    document.getElementById('form-feedback').addEventListener('submit', function (e) {
      e.preventDefault();

      // Simula envio do formulário
      document.getElementById('mensagem-sucesso').style.display = 'block';

      // Limpa os campos
      this.reset();

      // Rola até a mensagem
      document.getElementById("mensagem-sucesso").scrollIntoView({ behavior: "smooth" });
    });
  </script>

  <!-- Script para abrir imagem grande no modal -->
  <script>
    const imagemModal = document.getElementById('imagemModal');
    const imagemModalSrc = document.getElementById('imagemModalSrc');

    imagemModal.addEventListener('show.bs.modal', function (event) {
      const triggerImg = event.relatedTarget; // imagem clicada
      const src = triggerImg.getAttribute('data-src') || triggerImg.src;
      imagemModalSrc.src = src;
      imagemModalSrc.alt = triggerImg.alt;
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
