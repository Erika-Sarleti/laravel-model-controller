<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-movies">
        @foreach ($movies as $movie)
            <div class='card-container'>
                <h3 class="title-card">
                    {{$movie->title}}
                </h3>
                <h4 class="original-title">
                    {{$movie->original_title}}
                </h4>
                <div class="nation">
                    {{$movie->nationality}}
                </div>
                <div class="date">
                    {{$movie->date}}
                </div>
                <div class="rate">
                    {{$movie->vote}}
                </div>
                
            </div>
        @endforeach
    </div>
</body>
</html>