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

        <div style="float:left;margin-left: 235px;font-size: 35px;">学生记录表</div>
        <a href="add" style="float:left;margin-left: 1205px;font-size: 22px;">新增学生</a><b/>

            <table class="table table-hover">
                <tr>
                    <td>编号</td>
                    <td>姓名</td>
                    <td>年龄</td>
                    <td>班级</td>
                    <td>操作</td>
                </tr>
                @foreach($user as $u)
                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->age}}</td>
                    <td>{{$u->class}}</td>
                    <td><a href="show/{{$u->id}}">显示</a>/<a href="edit/{{$u->id}}">修改</a>/<a href="delete/{{$u->id}}">删除</a></td>
                </tr>
                @endforeach
            </table>
        {{--<div class="container">--}}
            {{--<ul>--}}
                {{--@foreach ($posts as $post)--}}
                    {{--<li>{{ $post->age }}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}

        {{--{!! $posts->render() !!}--}}
<script src="{{URL::asset('js/bootstrap.js')}}"></script>
<script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
</body>
</html>