<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h1>Enter the Id for Employee or Manager For Change The Role for This User.</h1>
    <form action="{{route('manager.edit.role')}}" method="get">
        @csrf
        @method("get")
        <label for="id">ID:</label><br>
        <input type="text" placeholder="ID" name="id" required><br><br>
        <input type="submit" value="Send ID">
    </form >
</head>
<body>
    
</body>
</html>