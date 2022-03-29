@extends ('backend.master')
@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">phnno</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
      @foreach($employees as $singleemployee)
      
    <tr>
      <th scope="row">1</th>
      <td>{{$singleemployee->name}}</td>
    <td>{{$singleemployee->phnno}}</td> 
      <td>{{$singleemployee->email}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection
