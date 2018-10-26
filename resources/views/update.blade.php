<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/update/{{$data->id}}" method="post">
    <table>
        <tr>
            <td>标题：</td>
            <td><input type="text" name="title" value="{{$data->title}}"></td>
        </tr>
        <tr>
            <td>密钥：</td>
            <td><input type="text" name="keywords" value="{{$data->keywords}}"></td>
        </tr>
        <tr>
            <td>内容：</td>
            <td><input type="text" name="content" value="{{$data->content}}"></td>
        </tr>
        <tr>
            <td><input type="submit"></td>
            <td><input type="reset" ></td>
        </tr>
    </table>
</form>
</body>
</html>