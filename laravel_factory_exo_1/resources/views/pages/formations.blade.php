@extends('template.main')





@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Show</th>
    </tr>
  </thead>
  <tbody>
      @foreach ( $datas as $data )  
      <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->nom}}</td>
        <td>{{$data->descriptio}}</td>
        <td><a href="{{route('showFormations',$data->id)}}" class="btn bnt-info"></a></td>  
    </tr>
      @endforeach
   
  </tbody>
</table>  
@endsection