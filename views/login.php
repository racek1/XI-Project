<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Test Form</title>
</head>
<body>
<form action="/login/logme" method="POST">
    <div>
        <label>
            Name <input name="name"/>
        </label>
    </div>
    <div>
        <label>
            Password <input name="password" type="password"/>
        </label>
    </div>
    <div>
        <button type="submit">Login</button>
    </div>
</form>
</body>
</html>