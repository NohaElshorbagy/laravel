
@include('includes.navbar')
<form action="{{route('users.store' )}}" method="POST">
  <!-- @method('PUT')//update
@method('DELETE')//delte -->

@csrf
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">name</label>
    <input type="text"  id="username" name="name" class="form-control" id="exampleInputPassword1">
  </div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input   name="email" id="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" id="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>