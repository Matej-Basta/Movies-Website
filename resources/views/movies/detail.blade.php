<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $movie->name?></title>
</head>
<body>

    <h1><?= $movie->name ?></h1>

    <ul>

        <?php foreach($movie as $key => $value) : ?>

            <li>
                <strong><?= $key ?>:</strong>
                <?= $value ?>
            </li>

        <?php endforeach; ?>

    </ul>

    <a href="/">Home</a>
    
</body>
</html>