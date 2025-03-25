<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/controle.css') }}">
    <title>teste</title>
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
          <a  href="{{route('user.index')}}"><img src="{{ URL::asset('imagens/botao-voltar.png') }}" alt="Voltar"></a>
        </div>
      </header>


    <center><h2>Lista de usuários cadastrados</h2></center>

    <hr>
@forelse ($user as $bduser)
<div class="user-info">
    <div>
        ID: {{$bduser->id}} <br>
        Nome: {{$bduser->name}} <br>
        E-mail: {{$bduser->email}}
    </div>

    <div>
        <a id="Visualizar" href="{{route('user.show', ['user' => $bduser->id])}}">Visualizar</a>
        <a id="Editar" href="{{route('user.editar', ['user' => $bduser->id])}}">Editar</a>
        <form method="POST" action="{{route('user.apagar',['user' => $bduser->id])}}">
          @csrf
          @method('delete')
          <button type="submit" onclick="return confirm('Tem certeza que deseja excluir o usuário {{$bduser->name}}')">Apagar</button>
      </form>
    </div>
</div>
<hr>
@empty

@endforelse

</body>
</html>
