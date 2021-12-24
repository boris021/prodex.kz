<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$hidden = $_POST['hidden'];
$textarea = $_POST['textarea'];
$radio = $_POST['radio'];
$radio_about = $_POST['radio_about'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$date = date("d.m.y H:i");
$token = "1564372416:AAHLtmU_YXMHhCeTsMl3P_9IOD2gycOCehc";
$chat_id = "-442195239";
$arr = array(
  'Откуда заявка: ' => $hidden,
  'Расскажите о продукте: ' => $textarea,
  'Ваш бюджет: ' => $radio,
  'Откуда вы о нас узнали?: ' => $radio_about,
  'Имя пользователя: ' => $name,
  'Телефон: ' => $tel,
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