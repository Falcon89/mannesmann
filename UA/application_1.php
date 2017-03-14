<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Refresh" content="4; URL=http://mannesmann.com.ua/"> 
</head>
<body>

<?php 

$sendto   = "mannesmann.ua@gmail.com"; // почта, на которую будет приходить письмо
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['telephone']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usermail = $_POST['email']; // сохраняем в переменную данные полученные из поля c адресом электронной почты

// Формирование заголовка письма
$subject  = "Заказ Скидка 30%";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
//mail($sendto, $subject, $msg, $headers);
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "<center><img src='images/spasibo.png'></center>";
//$mess= " Уважаемый $name, Ваш заказ принят. Оставайтесь на страничке. Вас автоматически перенаправит на главную"; 
//	echo "$mess";
} else {
	echo "<center><img src='images/ne-otpravleno.png'></center>";
}

?>

</body>
</html>

