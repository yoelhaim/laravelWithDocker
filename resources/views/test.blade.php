<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

   <div>


    @foreach ($user as $users)
        <h1>hala {{ $users['name']}}</h1>
    @endforeach
   </div>

</body>
</html>
