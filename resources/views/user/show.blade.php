<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/show.css') }}">
    <title>Visualizar Usuário</title>
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
        <h1>Visualizar Usuário</h1>

        <div class="info-item">
            <span>ID:</span> {{ $user->id }}
        </div>
        <div class="info-item">
            <span>Nome:</span> {{ $user->name }}
        </div>
        <div class="info-item">
            <span>E-mail:</span> {{ $user->email }}
        </div>
        <div class="info-item">
            <span>Cadastro em:</span> {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s') }}
        </div>
        <div class="info-item">
            <span>Última atualização:</span> {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s') }}
        </div>

       
        <div>
            <a href="{{route('user.controle')}}">Lista de Usuários</a>
            <a href="{{route('user.editar', ['user' => $user->id])}}">Editar Usuário</a>
            <form method="POST" action="{{route('user.apagar',['user' => $user->id])}}">
                @csrf
                @method('delete')
                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir o usuário {{$user->name}}')">Apagar</button>
            </form>
        </div>
    </div>


</body>
</html>