<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/imagens.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horta SESI 428</title>

    <!-- Link para o Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <div class="logo">
            <img src="{{ URL::asset('imagens/folha.png') }}" alt="Logo da empresa" class="logo-img">
            <span class="empresa-nome">BioMatic Systems</span>
        </div>
        <nav>
            <ul>
                <li><a href="#project">Projeto</a></li>
                <li><a href="#images">Imagens</a></li>
                <li><a href="#about">Sobre Nós</a></li>
            </ul>
        </nav>
        <div class="perfil">
            <img src="{{ URL::asset('imagens/botao-voltar.png') }}" alt="Botão voltar" class="perfil-img">
            <img src="{{ URL::asset('imagens/imagem-do-usuario-com-fundo-preto.png') }}" alt="Foto de Perfil" class="perfil-img">
        </div>
    </header>

    <!-- Galeria de imagens -->
    <section class="galeria">
        <div class="imagem">
            <img src="{{ URL::asset('imagens/img1.jpg') }}" alt="Imagem 1">
        </div>
        <div class="imagem">
            <img src="{{ URL::asset('imagens/img2.jpg') }}" alt="Imagem 2">
        </div>
        <div class="imagem">
            <img src="{{ URL::asset('imagens/img3.jpg') }}" alt="Imagem 3">
        </div>
        <div class="imagem">
            <img src="{{ URL::asset('imagens/img4.jpg') }}" alt="Imagem 4">
        </div>
        <div class="imagem">
            <img src="{{ URL::asset('imagens/img5.jpg') }}" alt="Imagem 5">
        </div>
        <div class="imagem">
            <img src="{{ URL::asset('imagens/img6.jpg') }}" alt="Imagem 6">
        </div>
    </section>
</body>
</html>
