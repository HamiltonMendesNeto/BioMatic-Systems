<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

    <div class="campo_verde">
        <img src="{{ URL::asset('imagens/Captura de tela 2025-02-28 150031.png') }}" class="imagem-capo-verde" alt="Foto Horta">
    </div>

    <div class="container">
        <div class="campoDeCadastro">
            <h1>Bem-Vindo</h1>
            <h2>Crie sua conta</h2>
            
            <!-- Controle button at top-right -->
            <a href="{{route('user.controle')}}" class="controle-button">controle</a>

            <form action="{{route('user.store')}}" method="POST">
                @csrf
                @method('POST')

                <div class="input-group">
                    <img src="{{ URL::asset('imagens/imagem-do-usuario-com-fundo-preto.png') }}" class="input-icon" alt="Usuário">
                    <input class="campos" type="text" name="name" placeholder="Nome" value="{{ old('name')}}">
                </div>

                <div class="input-group">
                    <img src="{{ URL::asset('imagens/o-email.png') }}" class="input-icon" alt="E-mail">
                    <input class="campos" type="email" name="email" placeholder="E-mail" value="{{ old('email')}}">
                </div>

                <div class="input-group">
                    <!-- Fixed the position of the lock icon -->
                    <img src="{{ URL::asset('imagens/cadeado.png') }}" class="input-icon" alt="Senha">
                    <input class="campos" type="password" name="password" placeholder="Senha">
                </div>

                <center> <button id="Cadastrar_button" type="submit">Cadastrar</button></center>

            </form>
            
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p style="color: #f00">
                        {{ $error }}
                    </p>
                @endforeach
            @endif
        </div>
    </div>

</body>
</html>
