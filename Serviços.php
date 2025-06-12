<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Serviços – BarbeariaSabará</title>
  <link href="css/styleServiço.css" rel="stylesheet" />
</head>
<body>
  <header class="servico-header">
    <a href="index.php" class="voltar-btn">Voltar</a>
    <h1 class="titulo-servico">Nossos Serviços</h1>
  </header>

  <main class="conteudo-servico">
  <section class="servicos-grid">
  <a href="cabelo.php" class="card-servico">
    <h3>Cabelo</h3>
    <p>Veja os preços e serviços que oferecemos para o seu cabelo.</p>
  </a>
  <a href="rosto.php" class="card-servico">
    <h3>Rosto</h3>
    <p>Veja os preços e serviços que oferecemos para o seu rosto</p>
  </a>
</section>
</main>

  <section class="agenda-barbeiro">
  <h2>Agenda do Barbeiro</h2>
  <table class="tabela-agenda">
    <thead>
      <tr>
        <th>Dia</th>
        <th>Disponibilidade</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Segunda-feira</td>
        <td>❌ Indisponível</td>
      </tr>
      <tr>
        <td>Terça-feira</td>
        <td>✅ Disponível</td>
      </tr>
      <tr>
        <td>Quarta-feira</td>
        <td>✅ Disponível</td>
      </tr>
      <tr>
        <td>Quinta-feira</td>
        <td>✅ Disponível</td>
      </tr>
      <tr>
        <td>Sexta-feira</td>
        <td>✅ Disponível</td>
      </tr>
      <tr>
        <td>Sábado</td>
        <td>✅ Disponível</td>
      </tr>
      <tr>
        <td>Domingo</td>
        <td>❌ Indisponível</td>
      </tr>
    </tbody>
  </table>
  <section class="horario-funcionamento">
  <h2>Horário de Funcionamento</h2>
  <ul>
    <li><strong>Terça a Sexta:</strong> 08:00 às 12:00 e 13:30 às 18:30</li>
    <li><strong>Sábado:</strong> 11:30 às 14:00 e 14:00 às 20:30</li>
    <li><strong>Domingo:</strong> Fechado</li>
  </ul>
</section>
<section class="agendamento-interativo">
  <h2>Agende seu Horário</h2>
  <div class="form-agendamento">

    <label for="nomeInput">🙍 Nome Completo:</label>
    <input type="text" id="nomeInput" placeholder="Digite seu nome completo" />

    <label for="diaSelect">📅 Escolha o dia:</label>
    <select id="diaSelect">
      <option value="">-- Selecione um dia --</option>
      <option value="terca">Terça-feira</option>
      <option value="quarta">Quarta-feira</option>
      <option value="quinta">Quinta-feira</option>
      <option value="sexta">Sexta-feira</option>
      <option value="sabado">Sábado</option>
    </select>

    <label for="horarioSelect">⏰ Escolha o horário:</label>
    <select id="horarioSelect" disabled>
      <option value="">-- Selecione um horário --</option>
    </select>

    <a id="btnAgendar" href="#" target="_blank" class="btn-zap-agendamento" style="display:none;">
      Agendar via WhatsApp
    </a>
  </div>
</section>

<script>
  const horarios = {
    segunda: [],
    terca: ["08:00", "09:00", "10:00", "11:00", "13:30", "15:00", "16:30", "18:00"],
    quarta: ["08:00", "09:30", "11:00", "13:30", "15:00", "16:30", "18:00"],
    quinta: ["08:00", "09:00", "10:00", "11:00", "13:30", "15:00", "17:00", "18:30"],
    sexta: ["08:00", "09:00", "10:00", "11:00", "13:30", "15:30", "17:00", "18:30"],
    sabado: ["11:30", "13:00", "14:30", "16:00", "18:00", "20:00"]
  };

  const diaSelect = document.getElementById("diaSelect");
  const horarioSelect = document.getElementById("horarioSelect");
  const btnAgendar = document.getElementById("btnAgendar");

  // Função para recuperar horários ocupados do localStorage
  function getHorariosOcupados() {
    const data = localStorage.getItem("horariosOcupados");
    return data ? JSON.parse(data) : {};
  }

  // Função para salvar horário como ocupado
  function marcarHorarioComoOcupado(dia, hora) {
    const ocupados = getHorariosOcupados();
    if (!ocupados[dia]) ocupados[dia] = [];
    if (!ocupados[dia].includes(hora)) {
      ocupados[dia].push(hora);
    }
    localStorage.setItem("horariosOcupados", JSON.stringify(ocupados));
  }

  // Preencher horários disponíveis com base nos ocupados
  diaSelect.addEventListener("change", () => {
    const dia = diaSelect.value;
    const ocupados = getHorariosOcupados();
    horarioSelect.innerHTML = `<option value="">-- Selecione um horário --</option>`;
    btnAgendar.style.display = "none";

    if (horarios[dia] && horarios[dia].length > 0) {
      horarioSelect.disabled = false;

      const horariosDisponiveis = horarios[dia].filter(h =>
        !ocupados[dia]?.includes(h)
      );

      if (horariosDisponiveis.length === 0) {
        const opt = document.createElement("option");
        opt.value = "";
        opt.textContent = "Sem horários disponíveis";
        horarioSelect.appendChild(opt);
        horarioSelect.disabled = true;
        return;
      }

      horariosDisponiveis.forEach(hora => {
        const opt = document.createElement("option");
        opt.value = hora;
        opt.textContent = hora;
        horarioSelect.appendChild(opt);
      });
    } else {
      horarioSelect.disabled = true;
    }
  });

  // Montar link do WhatsApp com base no horário selecionado
  horarioSelect.addEventListener("change", () => {
    const diaTexto = diaSelect.options[diaSelect.selectedIndex].text;
    const dia = diaSelect.value;
    const hora = horarioSelect.value;

    if (hora) {
      const mensagem = `Olá! Gostaria de agendar um corte para ${diaTexto}, às ${hora}.`;
      const url = `https://wa.me/44997285321?text=${encodeURIComponent(mensagem)}`;
      btnAgendar.href = url;
      btnAgendar.style.display = "inline-block";

      // Marcar horário como ocupado ao clicar no botão
      btnAgendar.onclick = () => {
        marcarHorarioComoOcupado(dia, hora);
      };
    } else {
      btnAgendar.style.display = "none";
    }
  });
</script>   

</body>
</html>
