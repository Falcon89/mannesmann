<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Refresh" content="4; URL=http://mannesmann.com.ua/"> 
</head>
<body>

<?php 

$sendto   = "mannesmann.ua@gmail.com"; // �����, �� ������� ����� ��������� ������
$username = $_POST['name'];   // ��������� � ���������� ������ ���������� �� ���� c ������
$usertel = $_POST['telephone']; // ��������� � ���������� ������ ���������� �� ���� c ���������� �������
$usermail = $_POST['email']; // ��������� � ���������� ������ ���������� �� ���� c ������� ����������� �����

// ������������ ��������� ������
$subject  = "����� ������ 30%";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// ������������ ���� ������
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>C�������� � �����</h2>\r\n";
$msg .= "<p><strong>�� ����:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>�����:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>�������:</strong> ".$usertel."</p>\r\n";
$msg .= "</body></html>";

// �������� ���������
//mail($sendto, $subject, $msg, $headers);
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "<center><img src='images/spasibo.png'></center>";
//$mess= " ��������� $name, ��� ����� ������. ����������� �� ���������. ��� ������������� ������������ �� �������"; 
//	echo "$mess";
} else {
	echo "<center><img src='images/ne-otpravleno.png'></center>";
}

?>

</body>
</html>

