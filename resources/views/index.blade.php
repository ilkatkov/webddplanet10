<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Служба поддержки</title>
    <script
        src="scripts/jquery-3.5.1.min.js">
    </script>
    <script src="scripts/sendOrder.js"></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
<section>
    <h1>Служба поддержки</h1>
</section>

<section>
{{--    <form action="{{route('storeMessage')}}" method="POST">--}}
        @csrf
        <div class="form_el">
            <label for="fullName">ФИО:</label>
            <input type="text" id="fullName" name="fullName" placeholder="Иванов Иван Иванович">
        </div>
        <div class="form_el">
            <label for="phoneNumber">Номер телефона:</label>
            <input type="text" id="phoneNumber" name="phoneNumber" value="+7 (___) ___-__-__">
            <script src="scripts/phoneMask.js"></script>
        </div>
        <div class="form_el">
            <label for="message">Текст обращения:</label>
            <textarea id="message" name="message" rows="10"></textarea>
        </div>
        <div class="form_el">
            <button id = "accept" name = "accept">Отправить</button>

        </div>
{{--    </form>--}}
</section>
</body>

</html>
