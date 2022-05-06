<?php

require_once ('./PHPMailer/PHPMailer.php');
require_once ('./PHPMailer/Exception.php');
require_once ('./PHPMailer/SMTP.php');

$email = $_POST['email_free'];

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->CharSet = 'UTF-8';

// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;

$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = 465;
$mail->Username = 'platonova.order@yandex.ru';
$mail->Password = 'IrR+1rOkysT1';

// От кого
$mail->setFrom('platonova.order@yandex.ru', 'Галина Платонова');

// Кому
$mail->addAddress($email, 'Заказчик');

// Тема письма
$mail->Subject = "Бесплатный чек лист platonovapit.ru";

// Тело письма
$body = '<p>Благодарю за доверие и выбор моего продукта. Буду рада, если он станет для Вас по-настоящему полезным и интересным. До встречи в Instagram!</p>';
$mail->msgHTML($body);

// Приложение
$mail->addAttachment(__DIR__ . '/free.pdf');

$mail->send();

header('Location: index.html')
?>