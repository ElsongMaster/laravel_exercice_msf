
@extends('backoffice.backTemplate.main')




@section('backContent')

<form action="{{route('updateEleve',$eleve->id)}}" method="post">
@csrf
@method('PUT')

Nom: <input type="text" value="{{$eleve->nom}}" name="nom">
Prénom: <input type="text" value="{{$eleve->prenom}}" name="prenom">
Age: <input type="text" value="{{$eleve->age}}" name="age">
Etat: <input type="text" value="{{$eleve->etat}}" name="etat">

<button class="btn btn-warning text-light">Submit</button>
</form>
@endsection