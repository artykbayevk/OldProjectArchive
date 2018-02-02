<?php
require_once('mail/PHPMailerAutoload.php');
//файлы
$host = $_SERVER["HTTP_HOST"];
$name = $_GET['name'];
$surname = $_GET['surname'];
$company = $_GET['company'];
$email = $_GET['email'];
$type = $_GET['selection'];
$text = $_GET['text'];

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 4; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);

$mail->Username = "yatakoisam@gmail.com";
$mail->Password = "Admin123123";

$mail->SetFrom("yatakoisam@gmail.com");
$mail->Body = "
Компания                 : $company"."<br>\n"."
Контактное лицо          : $name $surname"."<br>\n"."
Тип услуги               : $type"."<br>\n"."
E-mail заказчика         : $email"."<br>\n"."
Информация               : $text"."<br>\n";

$mail->AddAddress("kamalkhan.sdu@gmail.com");

if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header('Location: http://'.$host.'/uncleSite/consul.php');
}
?>
