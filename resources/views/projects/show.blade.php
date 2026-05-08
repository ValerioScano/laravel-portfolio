@extends("layouts.app")

@section("content")
    
<div class="text-center py-5">
    <h1> Details of project n°{{$project->id}}</h1>
        @foreach($project->technologies as $technology)
        <span class="badge" style="background-color: {{$technology->colore}}">{{$technology->nome}}</span>
    @endforeach
</div>

<div class="container text-center">
    
    
    <h3>{{$project->titolo}}</h3>


    <p>Progetto svolto per {{$project->committente}} e consegnato il {{$project->consegna}}</p>
    <p>Lo stack è <b>{{$project->type->stack}}</b></p>

    <a href="{{ route("dashboard")}}"> Torna in Dashboard </a>
    
</div>

@endsection