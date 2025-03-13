<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link rel="stylesheet" href="{{ URL::asset('css/integrantes.css') }}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BioMatic Systems</title>
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
        <li><a href="#">Sobre Nós</a></li>
      </ul>
    </nav>
    <div class="icones">
      <a  href="{{route('user.menu')}}"><img src="{{ URL::asset('imagens/botao-voltar.png') }}" alt="Voltar"></a>
      <a href="{{route('user.index')}}"><img src="{{ URL::asset('imagens/imagem-do-usuario-com-fundo-preto.png') }}" alt="Perfil"></a>
    </div>
  </header>
  
  <main>
    <section class="introducao">
      <h1>Quem é o Dev Squad?</h1>
    </section>
    <center>
    <section class="informacoes">
      <div class="info-box">
        <h1>Hamilton</h1>
        <h3 class="sub-texto">Product owner<br> --------(P.O)--------</h3>
        <h3>hamilton.n@aluno.senai.br</h3>
      </div>
      <div class="info-box">
        <h1>Arthur</h1>
        <h3 class="sub-texto">Information Analyst<br> --------(I.A)--------</h3>
        <h3>arthur.t.nascimento7@aluno.senai.br</h3>
      </div>
      <div class="info-box">
        <h1>Guilherme</h1>
        <h3 class="sub-texto">Planning Analyst <br> --------(P.A)--------</h3>
        <h3>guilherme.c.almeida7@aluno.senai.br</h3>
      </div>
      <div class="info-box">
        <h1>Gabriel</h1>
        <h3 class="sub-texto">Developer <br> --------(Dev)--------</h3>
        <h3>g.celeri@aluno.senai.br</h3>
      </div>
    </section>
  </center>
  </main>
</body>
</html>