<?php
// Проверяем, были ли получены данные через POST-запрос
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из POST-запроса
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $flow = $_POST["flow"];
    $offer = $_POST["offer"];
    $country = $_POST["country"];
    $currency = $_POST["currency"];
    $formId = $_POST["formId"];

    // Далее можно сделать что-то с этими данными, например, сохранить их в базу данных или отправить уведомление администратору

    // Пример вывода данных для тестирования
    echo "Name: $name\n";
    echo "Phone: $phone\n";
    echo "Flow: $flow\n";
    echo "Offer: $offer\n";
    echo "Country: $country\n";
    echo "Currency: $currency\n";
    echo "Form ID: $formId\n";
} else {
    // Если не было отправлено POST-запроса, возвращаем ошибку
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
