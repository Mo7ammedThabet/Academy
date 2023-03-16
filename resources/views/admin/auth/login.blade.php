<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>لوحة مدير النظام</title>
</head>
<body>
    <form action="{{route('admin.login')}}" method="post">
        @csrf
        <input type="text" name="email">
        <input type="password" name="password" id="password">
        <input type="submit" value="دخول">
    </form>
</body>
</html>