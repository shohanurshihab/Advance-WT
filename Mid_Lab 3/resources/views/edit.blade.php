@extends('layouts.app')
@section('content')

<center>

<h1>Edit</h1>
<form action="/edit" method="post" enctype="multipart/form-data">
      @csrf

      
<table><input type="hidden" name="id" value="{{$data['id']}}">
    <tr>
      <br></tr>
  <tr> <td>First Name: </td> 
  <td><input type="Text" name="firstname" value="{{$data['firstname']}}"> </td>
<td><span style="color:red">@error('firstname'){{$message}}@enderror</span><br></td>
</tr>
<tr><td><br></td></tr>
  <tr> <td>Last Name: </td>  
  <td><input type="Text" name="lastname" value="{{$data['lastname']}}"> </td>
  <td><span style="color:red">@error('lastname'){{$message}}@enderror</span><br></td></tr>
  <tr><td><br></td></tr>
  <tr><td>Address: </td>  
  <td><input type="Text" name="address" value="{{$data['address']}}"></td></tr>
  <tr><td><br></td></tr>
  <tr> <td>E-mail: </td>
  <td><input type="email" name="email" value="{{$data['email']}}"></td> </tr>
  <tr><td><br></td></tr>
  <tr> <td>Gender: </td>
  <td><input type="text" name="gender" value="{{$data['gender']}}"></td> </tr>
  <tr><td><br></td></tr>
  <tr><td>Password: </td>
  <td><input type="password" name="password" value="{{$data['password']}}"> </td></tr>
  <tr><td><br></td></tr>
<tr><td><br></td></tr>
  
  </table>
  <input type="submit" name="sm" value="Update" class="btn btn-primary">
</form>
</center>
@endsection