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
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
<section>
    <h1>Служба поддержки</h1>
</section>

<section>
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
        <div class = "form_el">
            <p id = "status">Готово к отправке</p>
        </div>
        <div class="form_el">
            <button id = "accept" name = "accept">Отправить</button>
            <script>
                let acceptButton = document.getElementById('accept');
                acceptButton.onclick = function (){
                    let userFullName = document.getElementById('fullName').value;
                    let userPhoneNumber = document.getElementById('phoneNumber').value;
                    let userMessage = document.getElementById('message').value;
                    let status = document.getElementById('status');
                    if (userFullName == ""){
                        status.style.color = "red";
                        status.innerHTML = "Поле 'ФИО' не может быть пустым."
                        return false;
                    }
                    if (userPhoneNumber.split("_").length-1> 0){
                        status.style.color = "red";
                        status.innerHTML = "Поле 'Номер телефона' не может быть пустым."
                        return false;
                    }
                    if (userMessage == ""){
                        status.style.color = "red";
                        status.innerHTML = "Поле 'Текст обращения' не может быть пустым."
                        return false;
                    }
                        $.ajax({
                        url: '{{route('storeMessage')}}',
                        data: {fullName: userFullName, phoneNumber: userPhoneNumber, message: userMessage},
                        type: 'POST',
                        success: function () {
                            console.log("Обращение отправлено.");
                            status.style.color = "green";
                            status.innerHTML = "Отправлено!"
                            acceptButton.disabled = true;
                            function setStartText(){
                                acceptButton.innerHTML = "Отправить";
                                acceptButton.disabled = false;
                                status.style.color = "black";
                                status.innerHTML = "Готово к отправке"
                            }
                            setTimeout(setStartText, 5000);
                        },
                        error: function() {
                            console.log("Произошла ошибка.");
                            status.style.color = "red";
                            status.innerHTML = "Произошла ошибка"
                        }
                    });
                }
            </script>
        </div>
</section>

<h5>Вездекод - Тула</h5>
<h5>Штаб программирования</h5>
<h5>Катков Илья, 2021</h5>

</body>

</html>
