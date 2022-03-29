@extends ('backend.master')
@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">brand</th>
    </tr>
  </thead>

  <tbody>
    @foreach($orders as $singleorder)
    <tr>
      <th scope="row">1</th>
      <td>{{$singleorder->name}}</td>
      <td>{{$singleorder->price}}</td>
      <td>{{$singleorder->brand}}</td>
    </tr>
   
   
  </tbody>
  @endforeach
</table>


@endsection
