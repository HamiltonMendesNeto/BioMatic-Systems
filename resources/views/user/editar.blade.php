<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuário</title>
</head>
<body>

<a href="{{route('user.controle')}}">Lista de Usuários</a> <br>
<a href="{{route('user.show', ['user' => $user->id])}}">Visualizar Usuário</a><br>

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
    
</body>
</html>
