<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/editar.css') }}">
    <title>Editar Usuário</title>
</head>
<body>
    <header>
        <div class="logo">
          <img src="{{ URL::asset('imagens/Folha.png') }}" alt="Logo BioMatic Systems">
          <span class="texto-logo">BioMatic Systems</span>
        </div>
        <nav>
        
        </nav>
        <div class="icones">
          <a  href="{{route('user.controle')}}"><img src="{{ URL::asset('imagens/botao-voltar.png') }}" alt="Voltar"></a>
        </div>
      </header>

      <div class="container">
        
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p style="color: #f00">
                    {{ $error }}
                </p>
            @endforeach
        @endif

        <form action="{{route('user.atualizar', ['user' => $user->id])}}" method="POST">
            @csrf
            @method('PUT')

            <h1>Editar Usuário</h1>

            <label>Nome:</label> <br>
            <input class="campos" type="text" name="name" placeholder="Nome" value="{{ old('name', $user->name)}}"><br>

            <label>E-mail:</label><br>
            <input class="campos" type="email" name="email" placeholder="E-mail" value="{{ old('email', $user->email)}}"><br>

            <label>Senha:</label><br>
            <input class="campos" type="password" name="password" placeholder="Senha"><br>

            <button type="submit">Atualizar</button>
        </form>
    </div>
</body>
</html>
