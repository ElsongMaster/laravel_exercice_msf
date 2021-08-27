@extends('backoffice.backTemplate.main')



@section('backContent')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Age</th>
      <th scope="col">Etat</th>
      <th scope="col">Show</th>
    </tr>
  </thead>
  <tbody>
      @foreach ( $datas as $data )  
      <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->nom}}</td>
        <td>{{$data->prenom}}</td>
        <td>{{$data->age}}</td>
        <td>{{$data->etat}}</td>
        <td><a href="{{route('showEleves',$data->id)}}" class="btn bnt-info"></a></td>
      </tr>
      @endforeach
@endsection