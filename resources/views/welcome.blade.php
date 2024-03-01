<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="/uploadFile" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" />
    <button type="submit">Загрузить файл</button>

</form>

<hr>
<h1>Готовый файл</h1>
<div style="height: 20px">
    <form action="/download" method="get" enctype="multipart/form-data">
    <a style="display: block; width: 50px; height: 50px; ;" href=/download>Скачать файл</a>
    </form>
</div>
</body>
</html>
