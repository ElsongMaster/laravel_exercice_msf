@extends('backoffice.backTemplate.main')




@section('backContent')
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">ID: {{$eleve->id}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Nom :{{$eleve->nom}}</h6>
    <p class="card-text">Prenom: {{$eleve->prenom}}</p>
    <p class="card-text">Age: {{$eleve->age}}</p>
    <p class="card-text">Etat: {{$eleve->etat}}</p>
    <form action="{{route('deleteEleve', $eleve->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <a href="{{route('editEleve', $eleve->id)}}" class="btn btn-warning">EDIT</a>
        <button type="submit" class="btn btn-danger">DELETE</button>
    </form>
  </div>
</div>  
@endsection