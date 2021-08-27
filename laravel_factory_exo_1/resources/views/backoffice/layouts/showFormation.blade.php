@extends('backoffice.backTemplate.main')




@section('backContent')
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">ID:{{$formation->id}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Nom:{{$formation->nom}}</h6>
    <p class="card-text">Description: {{$formation->description}}</p>
    <form action="{{route('deleteFormation', $formation->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <a href="{{route('editFormation', $formation->id)}}" class="btn btn-warning">EDIT</a>
        <button type="submit" class="btn btn-danger">DELETE</button>
    </form>
  </div>
</div>  
@endsection