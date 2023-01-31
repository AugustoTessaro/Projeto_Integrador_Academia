<x-layout title="Treinos" :user="$user">

<head>
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/alunos/treino.css')}}">
</head>

<body>
<h2>Treinos</h2>
<hr>

    <div class="lista-treinos">
    @foreach($treinos as $treino)
    <div class="treino">
        <h1>{{$treino->name}}</h1>
        <p>{{$treino->description}}</p>

    <form action="{{route('treino.show', $treino->id)}}" method= "GET">
        <button class="button-treino"> Ver treino </button>
    </form>
    </div>
    @endforeach
    </div>

</body>        
</x-layout>
