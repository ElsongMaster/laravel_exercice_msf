@extends('backoffice.backTemplate.main')




@section('backContent')
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">ID:{{$batiment->id}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Nom:{{$batiment->nom}}</h6>
    <p class="card-text">Description: {{$batiment->description}}</p>
    <form action="{{route('deleteBatiment', $batiment->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <a href="{{route('editBatiment', $batiment->id)}}" class="btn btn-warning">EDIT</a>
        <button type="submit" class="btn btn-danger">DELETE</button>
    </form>
  </div>
</div>
@endsection