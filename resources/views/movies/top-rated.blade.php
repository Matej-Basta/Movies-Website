<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top rated movies</title>
</head>
<body>
    <h1>50 top rated movies</h1>
    <ul>
        <?php foreach($movies as $movie) : ?>
            <li>
                <?= $movie->name ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>