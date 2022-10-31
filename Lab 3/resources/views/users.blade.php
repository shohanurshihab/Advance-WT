<h1>User Login</h1>
<button><a href="{{url('reg')}}">Registration</a></button>
<br><br>
<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter user id"/>
    <br>
    <span style="color:red">@error('username'){{$message}}@enderror</span><br>
    <input type="password" name="password" placeholder="enter password"/>
    <br><span style="color: red">@error('password'){{$message}}@enderror</span><br>
   
    <button type="submit"> Login</button>
    <br>
    <br>
    
</form>

