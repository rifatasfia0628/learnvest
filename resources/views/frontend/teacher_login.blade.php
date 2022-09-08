@extends('frontend.layouts.main')
@section('main-container')
<div class="headline">
    <h1>Login</h1>
</div>
<div class="loginbox">
<form action="{{ url('/') }}/teacher_login" method="post">
@csrf
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" name="password"class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>
<button type="submit" class="btn btn-primary">Login</button>
</form>
</div>

@endsection