<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration Form</title>
</head>
<body>

<h2>User Registration Form</h2>

<form action="{{route('manager.store')}}" method="post">
  @csrf
  <label for="name">Name:</label><br>
  <input type="text" placeholder="name" name="name" required><br><br>

  <label for="password">Password:</label><br>
  <input type="password" placeholder="password" name="password" required><br><br>

  <label for="email">Email:</label><br>
  <input type="email" placeholder="email" name="email" required><br><br>

  <label for="role">Role:</label><br>
  <select placeholder="role" name="role" required>
    <option value="">Select Role</option>
    <option value="manager">Manager</option>
    <option value="employee">Employee</option>
  </select><br><br>

  <input type="submit" value="Create New Account">
</form>

</body>
</html>
