<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search movie</title>
</head>

<body>
    <h2>Search results (<?= count($result); ?> found)</h2>

    <ul>
        <?php foreach ($result as $record) : ?>
            <li><?= $record->name ?>
            <?php endforeach; ?>
    </ul>
</body>

</html>