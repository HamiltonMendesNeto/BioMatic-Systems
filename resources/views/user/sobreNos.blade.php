<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BioMatic Systems</title>
  <link rel="stylesheet" href="{{ URL::asset('css/estilos.css') }}">
</head>
<body>

  <header>
    <div class="logo">
      <img src="{{ URL::asset('imagens/Folha.png') }}" alt="Logo BioMatic Systems">
      <span class="texto-logo">BioMatic Systems</span>
    </div>
    <nav>
      <ul>
        <li><a href="{{route('user.sobreNos')}}">Projetos</a></li>
        <li><a href="{{route('user.galeria')}}">Imagens</a></li>
        <li><a href="{{route('user.integrantes')}}">Sobre Nós</a></li>
      </ul>
    </nav>
    <div class="icones">
      <a href="{{route('user.menu')}}"><img src="{{ URL::asset('imagens/botao-voltar.png') }}" alt="Voltar"></a>
      <a href="{{route('user.index')}}"><img src="{{ URL::asset('imagens/imagem-do-usuario-com-fundo-preto.png') }}" alt="Perfil"></a>
    </div>
  </header>

  <div class="container">
    <div class="caixa-central">
      <div class="conteudo">
        <div class="titulo-container">
          <h1>BioMatic Systems</h1>
          <img src="{{ URL::asset('imagens/folha.png') }}" alt="Imagem Pequena" class="imagem-pequena"> 
        </div>
        <div class="sub-caixas">
          <div class="sub-caixa sub-caixa1">
            <h2>Monitoramento Inteligente</h2>
            <p>O BioMatic Systems usa tecnologia para otimizar a agricultura. Ele coleta dados como umidade do solo, temperatura ambiente e luminosidade.</p>
          </div>
          <div class="sub-caixa sub-caixa2">
            <h2>Automação Eficiente</h2>
            <p>Com essas informações, será possível automatizar o sistema de irrigação, garantindo o uso eficiente da água e o crescimento saudável das plantas.</p>
          </div>
        </div>
      </div>
      <div class="imagem">
        <img src="{{ URL::asset('imagens/ImagemHorta.png') }}" alt="Imagem da Horta">
      </div>
    </div>
  </div>

</body>
</html>
