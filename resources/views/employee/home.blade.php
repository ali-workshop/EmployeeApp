<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h1>this is all employees</h1>
@php
    // dd($employees)
@endphp
<table border="1">
    <thead>
      <tr>
        <th>index</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Role</th>
      </tr>
     </thead>
     <tbody>
        @foreach ($employees as $employee)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$employee->name}}</td>
        <td>{{$employee->email}}</td>
        <td>{{$employee->password}}</td>
        <td>{{$employee->role}}</td>
       
        
       </tr>
       @endforeach
    </tbody>
  </table>
<br><br>
<a href='{{route('employee.dashboard')}}'>back to previos page</a>

</head>
<body>
    
</body>
</html>