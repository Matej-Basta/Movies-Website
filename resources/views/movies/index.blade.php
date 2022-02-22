<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of movies</title>
</head>
<body>
    <h1>{{ $movie->name }}</h1>
    <ul>
    

        
        <li>
            Rating: <?= $movie->rating ?> / 10
            <!-- <h2>People:</h2> -->
            <!-- @foreach ($movie->people as $person)
                <li>{{ $person["fullname"] }}</li>
            @endforeach -->
        </li>

        <p>Reviews:</p>
        <ul>

            @foreach ($movie->reviews as $review)
                <li>{{ $review->text }}</li>
            @endforeach
        </ul>

        <form action="movies/rate" method="post">
            @csrf
            <br>

            <input type="hidden" name="movie_id" value="{{ $movie->id }}">
            <input type="text" name="value" value="" placeholder="value">
            <button type="submit">Submit</button>
        </form>
    </ul>
</body>
</html>