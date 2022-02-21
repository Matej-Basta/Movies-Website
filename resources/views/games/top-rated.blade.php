<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top rated video games</title>
</head>
<body>
    <h1>50 top rated video games</h1>
    <ul>
        <?php foreach($games as $game) : ?>
            
            <li>
                <?= $game->name ?>
            </li>

        <?php endforeach; ?>
    </ul>

    <p style="display:inline">Page:</p>
    <a href="?page=1">1</a>
    <a href="?page=2">2</a>
    <a href="?page=3">3</a>
    <a href="?page=4">4</a>
    <a href="?page=5">5</a>
    <br>
    <a href="/">Home</a>
</body>
</html>