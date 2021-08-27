@extends('template.main')





@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Age</th>
      <th scope="col">Etat</th>
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
      </tr>
      @endforeach
   
  </tbody>
</table>  
@endsection