<?php

declare(strict_types = 0);

ini_set('display_errors','0');
error_reporting(E_ALL);
/* https://api.telegram.org/bot5695258170:AAHdfcF7Uw7Zdob9i5EMdVuq4L4EWDgO3Dw/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$address = $_POST['user_address'];
$product = $_POST['product'];
$commit = $_POST['user_commit'];
$token = "token"; //<-token bot
$chat_id = "chat-id";//<-chatid
$arr = array(
    'Buyurtmachi: ' => $name,
    'telefon-raqami: ' => $phone,
    'manzili: ' => $address,
    'buyurtma soni: ' => $product,
    'komentariya: ' => $commit
);

$txt = $txt;
foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {
    header('Location: thanks.html');
} else {
    echo "Error";
}

?>

