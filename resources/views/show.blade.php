<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog_test</title>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
</head>
<body>

<div class="jumbotron">
    <h1>CURD</h1>
    <p>阅读让世界更美好</p>

</div>
<table class="table table-hover">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>age</td>
    </tr>
    @foreach($user as $u)
        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->name}}</td>
            <td>{{$u->age}}</td>
            {{--<td><a href="edit/{{$u->id}}">修改</a>/<a href="delete/{{$u->id}}">删除</a></td>--}}
        </tr>

    @endforeach
</table>
<script src="{{URL::asset('js/bootstrap.js')}}"></script>
<script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
</body>
</html>