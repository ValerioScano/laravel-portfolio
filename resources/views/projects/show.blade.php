@extends("layouts.app")

@section("content")
    
<div class="text-center py-5">
    <h1> Details of project n°{{$project->id}}</h1>
</div>

<div class="container text-center">
    <h3>{{$project->titolo}}</h3>
    <p>Progetto svolto per {{$project->committente}} e consegnato il {{$project->consegna}}</p>
    <a href="{{ route("dashboard")}}"> Torna in Dashboard </a>
    <p>Il tipo è <b>{{$project->type->tipo}}</b>, mentre lo stack è <b>{{$project->type->stack}}</b></p>
</div>

@endsection