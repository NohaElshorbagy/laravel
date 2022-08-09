
@include('includes.navbar')
@section('title','create')
@section('content')
<form action="{{route('posts.store' )}}" method="POST">
  <!-- @method('PUT')//update
@method('DELETE')//delte -->

@csrf
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">title</label>
    <input type="text"  id="title" name="title" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">body</label>
    <input   name="body" id="body" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="enabled" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    enabled
  </label>
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">User_id</label>
    <input type="text" id="user_id" name="user_id" class="form-control" id="exampleInputPassword1">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>