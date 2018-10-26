<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1" bordercolor="red" cellspacing="0">
    <th>ID</th>
    <th>标题</th>
    <th>密钥</th>
    <th>内容</th>
    <th>操作</th>
    @foreach($list as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->title}}</td>
            <td>{{$v->keywords}}</td>
            <td>{{$v->content}}</td>
            <td><a href="/delete/{{$v->id}}">删除</a> <a href="/update/{{$v->id}}">修改</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>