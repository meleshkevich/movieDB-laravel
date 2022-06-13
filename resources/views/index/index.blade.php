<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel test project</title>
</head>

<body>
    <h1>Hello, stranger!</h1>
    <h1>Welcome to my nice Laravel test project!</h1>
    <h2>Here are some things you can do:</h2>
    <ul>
        <li>
            <a href="http://www.laravel.test/top-rated-movies">Check 50 TOP-rated movies</a>
        </li>
        <li>
            <a href="http://www.laravel.test/top-rated-games">Check 50 TOP-rated videogames</a>
        </li>
        <li>
            <a href="http://www.laravel.test/movies/shawshank-redemption">Explore some details of The Shawshank redemption movie</a>
        </li>
    </ul>
    <h2>Search for a movie by the keyword: </h2>
    <form action="http://www.laravel.test/search" method="get" class="form">

        <label>Enter a keyword: </label>
        <input type="text" name="search" value="" />
        <button>Search for movie!</button>
    </form>

</body>

</html>