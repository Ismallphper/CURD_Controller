<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改</title>
</head>
<body>
    <div>
        <form action="save{{$user['id']}}" method="post">
            NAME:<input type="text" name="name" value="{{$user['name']}}">
            AGE:<input type="text" name="age" value="{{$user['age']}}">
            <input type="submit" value="提交">
        </form>
    </div>
</body>
</html>
