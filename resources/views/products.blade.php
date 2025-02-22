<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>
</head>
<body>
    <h1>Movie List</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie['title'] }} ({{ $movie['year'] }}) - Directed by {{ $movie['director'] }}</li>
        @endforeach
    </ul>
</body>
</html>
