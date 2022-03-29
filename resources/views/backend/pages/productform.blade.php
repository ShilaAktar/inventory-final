@extends ('backend.master')
@section('content')
<form action="{{route('product.store')}}" method="POST">
    @csrf
  <div class="form-group">
    <label> name</label>
    <input type="text" class="form-control" placeholder="Enter  name" name="name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
  <label for="exampleFormControlSelect1">Category</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1">
    @foreach($categories as $singlecategory)
            <option value="{{$singlecategory->id}}">{{$singlecategory->name}}</option>
            @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>Quantity</label>
    <input type="number" class="form-control" placeholder="Enter quantity " name="quantity" >
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label> price</label>
    <input type="number" class="form-control" placeholder="Enter  price" name="price" >
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label>Brand</label>
    <input type="text" class="form-control" placeholder="Enter brand" name="brand">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection