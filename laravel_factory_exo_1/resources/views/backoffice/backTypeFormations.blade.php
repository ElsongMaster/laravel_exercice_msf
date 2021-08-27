@extends('backoffice.backTemplate.main')



@section('backContent')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Show</th>
    </tr>
  </thead>
  <tbody>
      @foreach ( $datas as $data )  
      <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->nom}}</td>
        <td><a href="{{route('showTypeFormation',$data->id)}}" class="btn btn-info">SHOW</a></td>
        
    </tr>
      @endforeach
   
  </tbody>
</table>    
@endsection