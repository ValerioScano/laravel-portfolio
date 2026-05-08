@extends('layouts.app')

@section('content')

<div class="container py-3">
  <button type="button" class="btn btn-primary"><a href="{{ route("projects.create")}}" class="text-white">Aggiungi progetto</a></button>
</div>

<div class="container py-3">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Committente</th>
      <th scope="col">Consegna</th>
      <th scope="col">Link</th>
      <th scope="col">Stack</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($projects as $project)
      <tr>
          <th scope="row">{{ $project->id }}</th>
          <td>{{ $project->titolo }}</td>
          <td>{{ $project->committente }}</td>
          <td>{{ $project->consegna }}</td>
          <td>{{ $project->link}}</td>
          <td>{{ $project->type->stack }}</td>
          <td><a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary text-white">Dettagli...</a></td>
          <td><a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning text-white">Modifica</a></td>
          <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $project->id }}">Elimina</button></td>
      </tr>

      <!-- Modal for this specific project -->
      <div class="modal fade" id="deleteModal-{{ $project->id }}" tabindex="-1" aria-labelledby="deleteModalLabel-{{ $project->id }}" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="deleteModalLabel-{{ $project->id }}">Conferma eliminazione</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Sei sicuro di voler eliminare il progetto "{{ $project->titolo }}"? Questa azione è irreversibile.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
              <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina permanentemente</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  @endforeach
</tbody>
@endsection
