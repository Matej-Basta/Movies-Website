<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Top 10 movies</h1>
    <ul>
        <?php foreach($top_movies as $movie) : ?>
        
            <li>
                <?= $movie->name ?>
            </li>

        <?php endforeach; ?>
    </ul>

    <a href="/top-rated-movies">50 top rated movies</a>
    <a href="/top-rated-games">50 top rated games</a>
</body>
</html>