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
<h1>welcome</h1>
<?php
echo $users[0]['name'];


?>
<br>
<br>
@foreach($users as $user)
    <h1>pouzivatel {{$user["name"]}}</h1>
    <h2>ma {{$user["age"]}} rokov </h2>

    @if($user['age'] > 18)
        <h1>moze soferovat auto</h1>

    @endif

@endforeach




</body>
</html>
