<?php

ini_set('display_errors','On');
error_reporting('E_ALL');

$to = 'nik-gon2003@mail.ru'; //Адреса, куда будут приходить письма. две почты указываем через запятую
$sitename = $_SERVER['SERVER_NAME'];

if (isset($_POST['phone']) && !empty($_POST['phone']))
{
    $phone  = strip_tags($_POST['phone']);
    $name  = strip_tags($_POST['name']);
    $email  = strip_tags($_POST['email']);
    $message  = strip_tags($_POST['message']);

// Формирование заголовка письма
    $subject  = "[Сообщение с сайта ".$sitename."]";
    $headers  = "From: mail@".$sitename." \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка:</h2>\r\n";
    if(isset($_POST['name']) && !empty($_POST['name'])){
      $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
    }
    if(isset($_POST['phone']) && !empty($_POST['phone'])){
      $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
    }
    if(isset($_POST['email']) && !empty($_POST['email'])){
      $msg .= "<p><strong>E-mail:</strong> ".$email."</p>\r\n";
    }
    if(isset($_POST['message']) && !empty($_POST['message'])){
      $msg .= "<p><strong>Сообщение:</strong> ".$message."</p>\r\n";
    }
    $msg .= "</body></html>";
// отправка сообщения
    mail($to, $subject, $msg, $headers);
}
else
{
    echo "Заявка не отправлена :(";
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width,initial-scale=1'>
  <title>Ваша заявка принята</title>
</head>

<body>
  <div class='thankyou'>

    <h1 class="thankyou__title">Спасибо, заявка принята!</h1>
    <p>
      Оператор свяжется в течение 15 минут </p>
    
    <p class="thankyou__notice">Вы ввели следующие данные:</p>
    <p class="thankyou__notice">Телефон: <?php echo $phone;?></p>
    <p class="thankyou__notice">Если Вы допустили ошибку, вернитесь на страницу заказа и отправьте форму еще раз</p>


    <button class="button" onclick="history.go(-1);">Вернуться</button>
    
  </div>
</body>

</html>