@extends("layouts.app")

@section("content")
    <div class="p-5 text-center">
    <h1>Modifica un progetto</h1>
</div>

<div class="container mb-5">
    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT') 
    
        <div class="mb-3">
        <label for="titolo" class="form-label">Titolo progetto</label>
        <input type="text" class="form-control" id="titolo" aria-describedby="titoloHelp" name="titolo" value="{{$project->titolo}}">
      </div>

      <div class="mb-3">
        <label for="link" class="form-label">Link del progetto</label>
        <input type="url" class="form-control" id="link" name="link" value="{{$project->link}}">
      </div>

      <div class="mb-3">
        <label for="committente" class="form-label">Committente</label>
        <input type="text" class="form-control" id="committente" name="committente" value="{{$project->committente}}">
      </div>

        <div class="mb-3">
        <label for="consegna" class="form-label">Consegna</label>
        <input type="date" class="form-control" id="consegna" name="consegna" value="{{$project->consegna}}">
      </div>
        <select name="type_id" id="type_id">
          @foreach($types as $type)
          <option value="{{$type->id}}" {{ $project->type_id == $type->id ? 'selected' : '' }} >{{$type->stack}}</option>
        @endforeach
        </select>

        <div class="form-control mb-3 d-flex flex-wrap gap-5">
          @foreach($technologies as $technology)
          <div>
            <input type="checkbox" name="technologies[]" value="{{$technology->id}}" id="technology-{{$technology->nome}}" {{$project->technologies->contains($technology->id) ? "checked" : ""}}>
            <label for="technology-{{$technology->nome}}">{{$technology->nome}}</label>
          </div>
          @endforeach
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection