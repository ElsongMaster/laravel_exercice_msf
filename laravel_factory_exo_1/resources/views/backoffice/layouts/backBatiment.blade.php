@extends('backoffice.backTemplate.main')



@section('backContent')
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
        <td><a href="{{route('showBatiment',$data->id)}}" class="btn btn-info"></a></td>
      </tr>
      @endforeach
   
  </tbody>
</table>  
@endsection