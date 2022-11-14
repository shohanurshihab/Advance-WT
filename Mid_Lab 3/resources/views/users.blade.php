@extends('layouts.app')
@section('content')

<center>
<h1>User Login</h1>

<br><br>
<form action="dash" method="post">
    @csrf
    <input type="text" name="username" placeholder="User ID"/>
    <br>
    <span style="color:red">@error('username'){{$message}}@enderror</span><br>
    <input type="password" name="password" placeholder="Password"/>
    <br><span style="color: red">@error('password'){{$message}}@enderror</span><br>
   
    <button class="btn btn-primary" type="submit"> Login</button>
    <br>
    <br>
     <a href="{{url('reg')}}">Don't have an account <br> Register now !</a>
</form>
</center>
@endsection
