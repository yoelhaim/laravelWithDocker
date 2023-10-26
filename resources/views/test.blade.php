<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              clifford: '#da373d',
            }
          }
        }
      }
    </script>
</head>
<body>

    <div class="flex mt-10 flex-col justify-center w-[500px] mx-auto gap-4 ">


    @foreach ($user as $users)
       <div class="p-4 bg-white shadow-md hover:border hover:border-red-400">
        <h1 class="text-2xl">name:  {{ $users['name']}}</h1>
        <h2 class="text-1xl"> age : {{$users['age']}}</h2>
        <h2 class="text-1xl"> email : {{$users['city']}}</h2>
       </div>
    @endforeach
   </div>

</body>
</html>
