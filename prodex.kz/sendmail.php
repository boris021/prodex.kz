<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'phpmailer/language/');
	$mail->IsHTML(true);

	//От кого письмо
	$mail->setFrom('boris021@mail.ru', 'Заявка с сайта Webprof.kz');
	//Кому отправить
	$mail->addAddress('boris021@mail.ru');
	//Тема письма
	$mail->Subject = 'Заявка с сайта';

	//Тело письма
	//$body = '<h1>Тело письма!</h1>';
	
	if(trim(!empty($_POST['hidden']))){
		$body.='<p><strong>Откуда заявка:</strong> '.$_POST['hidden'].'</p>';
	}
	
	if(trim(!empty($_POST['name']))){
		$body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
	}
	if(trim(!empty($_POST['tel']))){
		$body.='<p><strong>Телефон:</strong> '.$_POST['tel'].'</p>';
	}

	$mail->Body = $body;

	//Отправляем
	if (!$mail->send()) {
		$message = 'Ошибка';
	} else {
		$message = 'Данные отправлены!';
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
?>