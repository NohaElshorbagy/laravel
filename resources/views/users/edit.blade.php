
@include('includes.navbar')
@section('title','create')
@section('content')
<form action="{{route('users.update' ,$user['id'])}}" method="POST">
  @method('PUT')

@csrf
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">name</label>
    <input value ="{{ $user['name']}}" type="text"  id="username" name="name" class="form-control" id="exampleInputPassword1">
  </div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input  value ="{{ $user['email']}}" name="email" id="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input value ="{{ $user['password']}}" type="password" id="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>