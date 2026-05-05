@extends("layouts.app")

@section("content")
    
<div class="text-center py-5">
    <h1> Details of project n°{{$project->id}}</h1>
</div>

<div class="container text-center">
    <h3>{{$project->titolo}}</h3>
    <p>Progetto svolto per {{$project->committente}} e consegnato il {{$project->consegna}}</p>
</div>

@endsection