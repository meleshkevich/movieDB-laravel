<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Shawshank redemption</title>
</head>

<body>
    <h1><?= $selected_movie[0]->name ?></h1>
    <h2>Year of release: <?= $selected_movie[0]->year ?></h2>
    <h3>Length: <?= $selected_movie[0]->length ?> min.</h3>
    <h3>Movie cast:</h3>
    <ul>
        <?php foreach ($selected_movie as $actor) : ?>
            <?php if ($actor->description) : ?>
                <li><?= $actor->fullname ?> as <?= $actor->description ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

</body>

</html>