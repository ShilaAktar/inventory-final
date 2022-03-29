@extends ('backend.master')
@section('content')

<a href="{{route('category.form')}}" class="btn btn-primary">Create category</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">details</th>
      <th scope="col"> Action</th>

    </tr>
  </thead>
  <tbody>
      @foreach($categories as $singleproduct)
      
    <tr>
      <th scope="row">1</th>
      <td>{{$singleproduct->name}}</td>
    <td>{{$singleproduct->details}}</td>
      <td>
          <a href="" class="btn btn-info">Edit</a>
          <a href="" class="btn btn-info">Delete</a>

      </td>

    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection