{{-- @dd($movies); --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <div class="movie-list">
        
            @foreach ($movies as $movie)
                <div class="card">
                    <h2>{{ $movie['title'] }}</h2>
                    <h3>{{ $movie['original_title'] }}</h3>
                    <h3>{{ $movie['nationality'] }}</h3>
                    <h3>{{ $movie['date'] }}</h3>
                    <h2>{{ $movie['vote'] }}</h2>
                </div>
            @endforeach
    
        </div>
    </div>

</body>

</html>
