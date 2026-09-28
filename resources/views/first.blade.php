<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>первая страница</title>
</head>

<body>
    <h1>привет, мир!</h1>
    <a href="/">главная</a>
    <p>сумма чисел {{ $a }} и {{ $b }} равна {{ $c }}</p>
</body>

</html>