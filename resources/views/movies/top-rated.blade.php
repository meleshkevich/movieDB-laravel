<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Rated 50 movies</title>
</head>

<body>
    <h1>Top rated 50 movies</h1>
    <ul>
        <?php foreach ($top_50_movies as $movie) : ?>
            <li><?= $movie->name ?>, Rating: <?= $movie->rating ?></li>
        <?php endforeach; ?>

    </ul>
</body>

</html>