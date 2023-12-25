
<?php 
session_start();
if($_POST){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];

 $to = "bobolin.machon@mail.ru"; 
 $subject = "Новое сообщение с сайта";
 $headers = "From: " . $email . "\r\n" .
    "Reply-To: " . $email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

 $mail_body = "Имя: " . $name . "\n" .
     "Email: " . $email . "\n" .
     "Сообщение: " . $message;

 if(mail($to, $subject, $mail_body, $headers)){
 $_SESSION['message'] =  "Сообщение успешно отправлено.";
 }else{
    $_SESSION['message'] = "Ошибка при отправке сообщения.";
 }
}
header('location: /')
?>