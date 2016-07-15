<?
if(isset($_POST['phone'])){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'mail@mediaone.in.ua,alkv84@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов info@shparma.kiev.ua
        $subject = 'Обратный звонок с сайта MediaOne'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>Сообщение с с сайта MediaOne!</title>
                    </head>
                    <body>
                        <p><strong>Имя отправителя:</strong> '. $_POST['name'] .'</p>
                        <p><strong>Телефон отправителя:</strong> '. $_POST['phone'] .'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: MediaOne\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}