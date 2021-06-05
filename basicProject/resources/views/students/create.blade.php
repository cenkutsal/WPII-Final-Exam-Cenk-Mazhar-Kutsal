<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Student</title>
</head>
<body>
<h1>Create New Student</h1>
    <form method="POST" action="#">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Name"> <br>
        <label for="surname">Surname:</label>
        <input type="text" name="surname" placeholder="Surname" >
        <label for="department">Surname:</label>
        <input type="text" name="department" placeholder="Department" >

        <input type="submit" value="submit">
    </form>
    
</body>
</html>