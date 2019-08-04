<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a new user</h1>
    <form method="POST" action="/users">
        {{ csrf_field() }}
        <div>
            <input type="text" name="username" placeholder="username">
        </div>

        <div>
            <input type="text" name="email" placeholder="joe@email.com">
        </div>

        <div>
            <input type="password" name="password" placeholder="password">
        </div>
        <div> 
            <button type="submit">Create User</button>
        </div>
    </form>
</body>
</html>