<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Refresh" content="4; URL=http://mannesmann.com.ua/"> 
</head>
<body>

<?php
$emailTo = 'mannesmann.ua@gmail.com';
$fio= $_POST['fio'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$adres= $_POST['adres'];
//$body = "$fio \n\n$phone\n\n$email \n\n$adres";
// Формирование заголовка письма
$subject  = "Уточнить детали";
$headers  = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$fio."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$email."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
$msg .= "<p><strong>Коментарий:</strong> ".$adres."</p>\r\n";
$msg .= "</body></html>";

//$headers = "Content-Type: text/plain; charset=utf-8\r\n".'From: MySite <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $emailTo;
mail($emailTo, $fio, $msg, $headers);
$emailSent = true;
?>
</body>
</html>
