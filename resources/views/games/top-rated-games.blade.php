<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top rated 50 games</title>
</head>

<body>
    <h1>Top rated 50 videogames</h1>

    <ul>
        <?php foreach ($top_50_games as $game) : ?>
            <li><?= $game->name ?>, Rating: <?= $game->rating ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>