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

    <h2>People</h2>
    <div style="display:flex">
    <h3>Cast</h3>
    <ul>
        <?php foreach($cast as $person) : ?>

            <li>
                <strong>Name:</strong>
                <?= $person->fullname ?>
                <br>
                <strong>Description:</strong>
                <?= $person->description ?>
                <br>
                <strong>Position:</strong>
                <?= $person->slug ?>
            </li>

        <?php endforeach; ?>
    </ul>

    <h3>Director</h3>
    <ul>
        <?php foreach($director as $person) : ?>

            <li>
                <strong>Name:</strong>
                <?= $person->fullname ?>
                <br>
                <strong>Description:</strong>
                <?= $person->description ?>
                <br>
                <strong>Position:</strong>
                <?= $person->slug ?>
            </li>

        <?php endforeach; ?>
    </ul>

    <h3>Writer</h3>
    <ul>
        <?php foreach($writer as $person) : ?>

            <li>
                <strong>Name:</strong>
                <?= $person->fullname ?>
                <br>
                <strong>Description:</strong>
                <?= $person->description ?>
                <br>
                <strong>Position:</strong>
                <?= $person->slug ?>
            </li>

        <?php endforeach; ?>
    </ul>
    <h3>Producer</h3>
    <ul>
        <?php foreach($producer as $person) : ?>

            <li>
                <strong>Name:</strong>
                <?= $person->fullname ?>
                <br>
                <strong>Description:</strong>
                <?= $person->description ?>
                <br>
                <strong>Position:</strong>
                <?= $person->slug ?>
            </li>

        <?php endforeach; ?>
    </ul>
    <h3>Composer</h3>
    <ul>
        <?php foreach($composer as $person) : ?>

            <li>
                <strong>Name:</strong>
                <?= $person->fullname ?>
                <br>
                <strong>Description:</strong>
                <?= $person->description ?>
                <br>
                <strong>Position:</strong>
                <?= $person->slug ?>
            </li>

        <?php endforeach; ?>
    </ul>
    <h3>Cinematographer</h3>
    <ul>
        <?php foreach($cinematographer as $person) : ?>

            <li>
                <strong>Name:</strong>
                <?= $person->fullname ?>
                <br>
                <strong>Description:</strong>
                <?= $person->description ?>
                <br>
                <strong>Position:</strong>
                <?= $person->slug ?>
            </li>

        <?php endforeach; ?>
    </ul>
    </div>

    <a href="/">Home</a>
    
</body>
</html>