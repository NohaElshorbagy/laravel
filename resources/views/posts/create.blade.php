<form action="{{route('users.create')}}" method="POST">

@csrf
<label>Name</label>
<input type="text" name="name">
<label>email</label>
<input type="text" name="email">
<label>password</label>
<input type="password" name="password">
</form>