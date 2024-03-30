<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Account Updated Form</title>
</head>
<body>

<h2>Account Updated Form</h2>

<form action="{{route('manger.update.role',['id'=>$user->id])}}" method="post">
  @csrf
  @method("PUT")
  <label for="name">Name:</label><br>
  <input value={{$user->name}} type="text" placeholder="name" name="name"><br><br> 
  {{-- this should not be input --}}

  <label for="role">Role:</label><br>
  <select placeholder="role" name="role" required>
    <option value="{{$user->role}}">Select Role</option>
    <option value="manager">Manager</option>
    <option value="employee">Employee</option>
  </select><br><br>

  <input type="submit" value="Update Account">
</form>

</body>
</html>
