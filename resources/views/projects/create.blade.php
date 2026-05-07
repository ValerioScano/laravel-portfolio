@extends("layouts.app")

@section("content")
    
<div class="p-5 text-center">
    <h1>Crea un progetto</h1>
</div>

<div class="container mb-5">
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf 
    
        <div class="mb-3">
        <label for="titolo" class="form-label">Titolo progetto</label>
        <input type="text" class="form-control" id="titolo" aria-describedby="titoloHelp" name="titolo">
      </div>

      <div class="mb-3">
        <label for="link" class="form-label">Link del progetto</label>
        <input type="url" class="form-control" id="link" name="link">
      </div>

      <div class="mb-3">
        <label for="committente" class="form-label">Committente</label>
        <input type="text" class="form-control" id="committente" name="committente">
      </div>

        <div class="mb-3">
        <label for="consegna" class="form-label">Consegna</label>
        <input type="date" class="form-control" id="consegna" name="consegna">
      </div>

      <div class="mb-3">
        <label for="type">Tipo progetto</label>
        <select name="type_id" id="type_id">
          @foreach($types as $type)
          <option value="{{$type->id}}">{{$type->stack}}</option>
        @endforeach
        </select>
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection