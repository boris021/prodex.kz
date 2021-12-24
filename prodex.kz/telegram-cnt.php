<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$hidden = $_POST['hidden'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$date = date("d.m.y H:i");
$token = "1564372416:AAHLtmU_YXMHhCeTsMl3P_9IOD2gycOCehc";
$chat_id = "-442195239";
$arr = array(
  'Откуда заявка: ' => $hidden,
  'Имя пользователя: ' => $name,
  'Телефон: ' => $tel,
  'Email: ' => $email,
  'Дата и время заявки: ' => $date
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  $message = 'Ошибка';
} else {
  $message = 'Данные отправлены!';
}
$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);

?>