<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Movies</title>
</head>
<body>
    <header>
        <div>
            <h2>Movies</h2>
        </div>
    </header>
    <main>
        <div class="boxFilms">
            @foreach ($movies as $movie)
            <div class="cardFilmBox">
                <div class="img">img</div>
                <h3>{{$movie["title"]}}</h3>
                <h4>{{$movie["nationality"]}}</h4>
                <h4>{{$movie["date"]}}</h4>
                <h4>{{$movie["vote"]}}</h4>
            </div>
            @endforeach
        </div>
    </main>
</body>
</html>