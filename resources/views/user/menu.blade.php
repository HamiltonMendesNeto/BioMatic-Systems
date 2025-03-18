<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela principal</title>
    <link rel="stylesheet" href="{{ URL::asset('css/styleMenu.css') }}">
</head>
<body>
    <!-- Cabeçalho -->
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
            <a href="{{route('user.index')}}"><img src="{{ URL::asset('imagens/imagem-do-usuario-com-fundo-preto.png') }}" alt="Perfil"></a>
        </div>
    </header>

    <!-- Conteúdo principal -->
    <main>
        <div class="box">
            <img src="{{ URL::asset('imagens/folha.png') }}" alt="Folha" class="folhas">
            <h1>BioMatic Systems</h1>
            <button class="saiba-mais"><a href="{{route('user.sobreNos')}}">Saiba mais</a></button>
        </div>

        <div class="alface">
            <img src="{{ URL::asset('imagens/alfacesaskkk.png') }}" alt="Alface">
        </div>
    </main>
</body>
</html>
