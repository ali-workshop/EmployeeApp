<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h1>this is all Users Employees AND Managers</h1>
@php
    // dd($users)
@endphp
<table border="1">
    <thead>
      <tr>
        <th>index</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Role</th>
        <td>Delete</td>
      </tr>
     </thead>
     <tbody>
        @foreach ($users as $user)
        <tr>

        <td>{{$loop->iteration}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
        <td>{{$user->role}}</td>
        <td><a href='{{route('manager.delet',['user'=>$user])}}'>DELET</a></td>
        
       </tr>
       @endforeach
    </tbody>
  </table>
<br><br>
<a href='{{route('manager.dashboard')}}'>back to previos page</a>

</head>
<body>
    
</body>
</html>