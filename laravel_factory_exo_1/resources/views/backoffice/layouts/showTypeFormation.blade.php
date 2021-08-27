@extends('backoffice.backTemplate.main')




@section('backContent')

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">ID:{{$typeformation->id}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Nom:{{$typeformation->nom}}</h6>
    <form action="{{route('deleteTypeFormation', $typeformation->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <a href="{{route('editTypeFormation', $typeformation->id)}}" class="btn btn-warning">EDIT</a>
        <button type="submit" class="btn btn-danger">DELETE</button>
    </form>
  </div>
</div>
    
@endsection