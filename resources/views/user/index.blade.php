<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="imagens">
</head>
<body>

    <div class="campo_verde">
        <img src="{{ URL::asset('imagens/Captura de tela 2025-02-28 150031.png') }}" class="imagem-capo-verde" alt="Foto Horta">
    </div>
    
    <div class="container">
        <div class="campoDeCadastro">
            <h1>Bem-Vindo</h1>
            <h2>Crie sua conta</h2>

            <div class="input-group">
                <img src="{{ URL::asset('imagens/imagem-do-usuario-com-fundo-preto.png') }}" class="input-icon" alt="Usuário">
                <input class="campos" type="text" placeholder="Nome">

            </div>

            <div class="input-group">
                <img src="{{ URL::asset('imagens/o-email.png') }}" class="input-icon" alt="E-mail">
                <input class="campos" type="email" placeholder="E-mail">
            </div>
           

            <div class="input-group">
                <img src="{{ URL::asset('imagens/cadeado.png') }}" class="input-icon" alt="Senha">
                <input class="campos" type="password" placeholder="Senha">
            </div>
            <center> <button id="Cadastrar_button">Cadastrar</button></center>
           
        </div>
    </div>
    

</body>
</html>
