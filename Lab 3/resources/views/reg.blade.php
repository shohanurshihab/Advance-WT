<h1>Registration Form</h1>




      <form action="reg" method="post" enctype="multipart/form-data">
      @csrf
<table>
    <tr><button><a href="{{url('login')}}">Login</a></button>
      <br></tr>
  <tr> <td>First Name: </td> 
  <td><input type="Text" name="firstname" id="fn" onkeyup="checkfname()"> </td>
<td><span style="color:red">@error('firstname'){{$message}}@enderror</span><br></td>
</tr>
  <tr> <td>Last Name: </td>  
  <td><input type="Text" name="lastname"> </td>
  <td><span style="color:red">@error('lastname'){{$message}}@enderror</span><br></td></tr>
  <tr><td>Address: </td>  
  <td><input type="Text" name="address"></td></tr>
  <tr> <td>E-mail: </td>
  <td><input type="email" name="email"></td> </tr>
  <tr> <td>Gender: </td>
  <td><input type="text" name="gender"></td> </tr>
  <tr><td>Password: </td>
  <td><input type="password" name="password"> </td></tr>
<tr><td><br></td></tr>
  <tr>
  <td><input type="submit" name="sm" value="Submit" id="sm" onclick="submit()"></td>
  <td><input type="reset" name="rs"></td> </tr>

  
  </table>
