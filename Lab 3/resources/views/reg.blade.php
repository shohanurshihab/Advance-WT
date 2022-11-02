@extends('layouts.app')
@section('content')

<center>


<h1>Registration Form</h1>
<br>

      <form action="users" method="post" enctype="multipart/form-data">
      @csrf
      <table>
    <tr>
      <br></tr>
  <tr> <td>First Name: </td> 
  <td><input type="Text" name="firstname" id="fn" onkeyup="checkfname()"> </td>
<td><span style="color:red">@error('firstname'){{$message}}@enderror</span><br></td>
</tr>
<tr><td><br></td></tr>
  <tr> <td>Last Name: </td>  
  <td><input type="Text" name="lastname"> </td>
  <td><span style="color:red">@error('lastname'){{$message}}@enderror</span><br></td></tr>
  <tr><td><br></td></tr>
  <tr><td>Address: </td>  
  <td><input type="Text" name="address"></td></tr>
  <tr><td><br></td></tr>
  <tr> <td>E-mail: </td>
  <td><input type="email" name="email"></td> </tr>
  <tr><td><br></td></tr>
  <tr> <td>Gender: </td>
  <td><input type="text" name="gender"></td> </tr>
  <tr><td><br></td></tr>
  <tr><td>Password: </td>
  <td><input type="password" name="password"> </td></tr>

<tr><td><br></td></tr>
<tr><td><br></td></tr>
  <tr>
    <td></td>
  <td><input type="submit" name="sm" value="Submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="rs" class="btn btn-primary" value="  Reset  "></td> </tr>

  
  </table>
   
      </form>
</center>
@endsection