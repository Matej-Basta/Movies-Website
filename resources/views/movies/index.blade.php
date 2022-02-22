<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of movies</title>
</head>
<body>
    <h1>Top rated movies</h1>
    <ul>
        <?php foreach($movies as $movie) : ?>

        
        <li>
            <?= $movie->name ?> <br>
            Rating: <?= $movie->rating ?> / 10
            <h2>People:</h2>
            @foreach ($movie->people as $person)
                <li>{{ $person["fullname"] }}</li>
            @endforeach
        </li>
        
        <?php endforeach; ?>
    </ul>
</body>
</html>