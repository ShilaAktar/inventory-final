@extends ('backend.master')
@section('content')
<form action="{{route('category.post')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputName">category_Name</label>
    <input type="text" name="category_Name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter name">
    </div>

    

    <div class="form-group">
    <label for="exampleInputBrand">Details</label>
    <input type="text" name="Details" class="form-control" id="exampleInputBrand" aria-describedby="brandHelp" placeholder="Enter brand">
    </div>

    <br>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection