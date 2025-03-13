<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BioMatic Systems</title>
  <link rel="stylesheet" href="{{ URL::asset('css/imagens.css') }}">
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
      <a  href="{{route('user.menu')}}"><img src="{{ URL::asset('imagens/botao-voltar.png') }}" alt="Voltar"></a>
      <a href="{{route('user.index')}}"><img src="{{ URL::asset('imagens/imagem-do-usuario-com-fundo-preto.png') }}" alt="Perfil"></a>
    </div>
  </header>

  <!-- Galeria de imagens -->
  <section class="galeria">
    <div class="imagem">
      <img src="{{ URL::asset('imagens/img1.jpg') }}" alt="Imagem mostrando o monitoramento inteligente">
    </div>
    <div class="imagem">
      <img src="{{ URL::asset('imagens/img2.jpg') }}" alt="Imagem de horta automatizada com sensores">
    </div>
    <div class="imagem">
      <img src="{{ URL::asset('imagens/img3.jpg') }}" alt="Sistema de irrigação eficiente em ação">
    </div>
    <div class="imagem">
      <img src="{{ URL::asset('imagens/img4.jpg') }}" alt="Tecnologia aplicada no cultivo agrícola">
    </div>
    <div class="imagem">
      <img src="{{ URL::asset('imagens/img5.jpg') }}" alt="Processo de coleta de dados para análise">
    </div>
    <div class="imagem">
      <img src="{{ URL::asset('imagens/img6.jpg') }}" alt="Visão geral de um sistema automatizado em operação">
    </div>
  </section>

</body>
</html>
