@extends('layouts.app')

@section('content')
<div class="container py-3">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Committente</th>
      <th scope="col">Consegna</th>
      <th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($projects as $project)
        <tr>
            <th scope="row">{{$project->id}}</th>
            <td scope="col">{{$project->titolo}}</td>
            <td scope="col">{{$project->committente}}</td>
            <td scope="col">{{$project->consegna}}</td>
            <td> <a href="{{route("projects.show", $project->id)}}">Vedi dettagli</a></td>
          </tr>
    @endforeach
</tbody>
</table>
</div>
@endsection
