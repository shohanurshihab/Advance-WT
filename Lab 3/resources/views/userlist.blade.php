<h1>User List</h1>
<table border="2">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Gender</td>
        <td>Password</td>
        <td>Action</td>

           
    </tr>
    @foreach($student as $member)
    <tr>

        <td>{{$member['id']}}</td>
        <td>{{$member['firstname']}}</td>
        <td>{{$member['lastname']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['address']}}</td>
        <td>{{$member['gender']}}</td>
        <td>{{$member['password']}}</td>
        <td> <a href='/delete/ {{$member->id}}'> Delete </a> 
         <a href='/edit/ {{$member->id}}'> Update </a> </td>
            
    </tr>
    @endforeach
</table>