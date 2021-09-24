<?php

/* https://api.telegram.org/bot2034173056:AAHU3qAkxa9tHObNmIaWyPX87mUoZJeNlJQ/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$tel = $_POST['tel'];
$email = $_POST['email'];
$token = "2034173056:AAHU3qAkxa9tHObNmIaWyPX87mUoZJeNlJQ";
$chat_id = "-449664837";
$arr = array(
  'Телефон: ' => $tel,
  'Email' => $email,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo ('Готово');
  //header('Location: ');
} else {
  echo "Error";
}
?>