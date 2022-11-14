@extends('layouts.app')
@section('content')

<center>

<h1>User List</h1>

<table border="2">
    <tr>
        <td>&nbsp;&nbsp;ID</td>
         <td>&nbsp&nbsp&nbsp&nbsp</td>
        <td>First Name</td>
         <td>&nbsp&nbsp&nbsp&nbsp</td>
        <td>Last Name</td>
         <td>&nbsp&nbsp&nbsp&nbsp</td>
        <td>Email</td>
         <td>&nbsp&nbsp&nbsp&nbsp</td>
        <td>Address</td>
         <td>&nbsp&nbsp&nbsp&nbsp</td>
        <td>Gender</td>
         <td>&nbsp&nbsp&nbsp&nbsp</td>
        <td>Password</td>
         <td>&nbsp&nbsp&nbsp&nbsp</td>
        <td align="center">Action&nbsp;&nbsp;</td>

           
    </tr>
    @foreach($student as $member)
    <tr>

        <td>&nbsp;&nbsp;{{$member['id']}}</td>
         <td>&nbsp&nbsp&nbsp&nbsp</td>
        <td>{{$member['firstname']}}</td>
         <td>&nbsp&nbsp&nbsp&nbsp</td>
        <td>{{$member['lastname']}}</td>
         <td>&nbsp&nbsp&nbsp&nbsp</td>
        <td>{{$member['email']}}</td>
         <td>&nbsp&nbsp&nbsp&nbsp</td>
        <td>{{$member['address']}}</td>
         <td>&nbsp&nbsp&nbsp&nbsp</td>
        <td>{{$member['gender']}}</td>
         <td>&nbsp&nbsp&nbsp&nbsp</td>
        <td>{{$member['password']}}</td>
         <td>&nbsp&nbsp&nbsp&nbsp</td>
        <td> <a href='/delete/ {{$member->id}}'> Delete </a>
        &nbsp; 
         <a href='/edit/ {{$member->id}}'> Update </a>&nbsp;&nbsp; </td>
            
    </tr>
    @endforeach
</table>
</center>
@endsection