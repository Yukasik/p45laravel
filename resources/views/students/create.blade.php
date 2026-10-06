<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Создание студента</title>
</head>

<body>
    <div class="container mx-auto">
        <h1>создание записи о студенте</h1>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <input type="text" name="firstname" placeholder="введите имя" required><br>
            <input type="text" name="middlename" placeholder="введите отчество"><br>
            <input type="text" name="lastname" placeholder="введите фамилию" required><br>
            <input type="date" name="birthday" placeholder="введите дату рождения" required><br>
            <input type="submit" value="создать">
        </form>
    </div>
</body>

</html>