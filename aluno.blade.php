<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<x-layout title="Listagem de Alunos" :user="$user">

<head>
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/professores/aluno.css')}}">
</head>

<h2>{{$data['aluno']->name}}</h2>  
<hr>

    <div class="lista-treinos">
    @foreach ($data['treinos'] as $treino)
    <div class="treino">
        <h3>Data inicial: {{$treino->init_date}}</h3>    
        <h3>Data final: {{$treino->end_date}}</h3>
        <h3>Nome do Treino: {{$treino->name}}</h3>
        <h3>Descrição: {{$treino->description}}</h3>

            <form action="{{route('treino.edit', $treino->id)}}" method="GET">
            <button class="button-editar" type="submit">Editar</button>
            </form>               
                    

            <form action="{{route('exercicio.createFromTreino', $treino->id)}}" method="GET">
            <button class="button-editar" type="submit">Adicionar exercício</button>
            </form>    
                
                
            <form action="{{route('treino.destroy', $treino->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="button-excluir" type="submit"> Excluir </button>
            </form>
             
            </div>
            @endforeach
            </div>
    
    {{-- <form action="{{route('aluno.create')}}" method= "GET">
    <button class="criar-treino"> Criar Treino </button>
    </form> --}}
    <a href="{{route('treino.createFromAluno', $data)}}">Criar treino</a>
</x-layout>

