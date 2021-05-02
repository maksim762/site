<!-- https://api.telegram.org/bot1754733088:AAE0xuRuE-w0VYSkYWhajxlf13EkLomwEAg/getUpdates -->

<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$message = $_POST['message'];
$token = "1754733088:AAE0xuRuE-w0VYSkYWhajxlf13EkLomwEAg";
$chat_id = "-567788625";
$arr = array(
    'Имя пользователя: ' => $name,
    'Телефон: ' => $tel,
    'E-mail: '  => $email,
    'Сообщение: ' => $message
);

foreach($arr as $key => $value) {
    $txt .= "<br>".$key."br".$value."%0A";
};

$sendtoTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}
    &parse_mode=html&text={$txt}", "r");

if($sendtoTelegram){
    header('location: thank-you.html');
} else{
    echo "Error";
}

?>