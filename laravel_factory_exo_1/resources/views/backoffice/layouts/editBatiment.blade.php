
@extends('backoffice.backTemplate.main')




@section('backContent')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>  
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('updateBatiment',$batiment->id)}}" method="post">
@csrf
@method('PUT')

Nom: <input type="text" value="{{$batiment->nom}}" name="nom">
Description: <input type="text" value="{{$batiment->description}}" name="description">

<button class="btn btn-warning text-light">Submit</button>
</form>
@endsection