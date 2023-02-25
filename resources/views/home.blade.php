<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   @vite('resources/js/app.js')
</head>
<body>

<div class='container text-center'>
    <h1>Movies</h1>
<div class='d-flex w-100 flex-wrap'>
    @foreach ($movies as $movie )
@include('card')
    @endforeach

</div>

</div>
        

</body>
</html>