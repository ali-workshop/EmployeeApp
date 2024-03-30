<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Account Updated Form</title>
</head>
<body>

<h2>Account Updated Form</h2>

<form action="{{route('manager.update.id',['id' =>$user->id])}}" method="post">
  @csrf
  @method("PUT")
  <label for="name">Name:</label><br>
  <input value={{$user->name}} type="text" placeholder="name" name="name" required><br><br>

  <label for="password">Password:</label><br>
  <input value={{$user->password}}  type="password" placeholder="password" name="password" required><br><br>

  <label for="email">Email:</label><br>
  <input value={{$user->email}} type="email" placeholder="email" name="email" required><br><br>

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
