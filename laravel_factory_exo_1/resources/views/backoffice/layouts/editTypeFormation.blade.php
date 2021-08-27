
@extends('backoffice.backTemplate.main')




@section('backContent')

<form action="{{route('updateTypeFormation',$typeformation->id)}}" method="post">
@csrf
@method('PUT')

Nom: <input type="text" value="{{$typeformation->nom}}" name="nom">


<button class="btn btn-warning text-light">Submit</button>
</form>
@endsection