@extends ('backend.master')
@section('content')

<a href="{{route('product.create')}}" class="btn btn-primary">Create product</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">brand</th>
      <th scope="col">price</th>
      <th scope="col">category</th>
      <th scope="col">quantity</th>
      <th scope="col"> Action</th>

    </tr>
  </thead>
  <tbody>
      @foreach($products as $singleproduct)
      
    <tr>
      <th scope="row">1</th>
      <td>{{$singleproduct->name}}</td>
    <td>{{$singleproduct->brand}}</td> 
      <td>{{$singleproduct->price}}</td>
      <td>{{$singleproduct->category}}</td>
      <td>{{$singleproduct->quantity}}</td>
      <td>
          <a href="" class="btn btn-info">Edit</a>
          <a href="" class="btn btn-info">Delete</a>

      </td>

    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection