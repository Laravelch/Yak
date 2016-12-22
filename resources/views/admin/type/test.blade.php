
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="/admin/type/add" method="post">

    名字：<input type="text" name="name" id=""><br>
    <input type="hidden" name="type_id" id="" value="0">
    <input type="hidden" name="path" id="" value="0,">
    <input type="hidden" name="_token" id="" value="{{ csrf_token()  }}">
    <input type="submit" value="submit">

</form>
</body>
</html>