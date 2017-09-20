<?php


$project_name = trim($_POST["project_name"]);
$admin_email  = trim($_POST["admin_email"]);
$form_subject = trim($_POST["position"]);
$user_name  = trim($_POST["name"]);
$user_mail  = trim($_POST["mail"]);
$user_phone  = trim($_POST["phone"]);


$msg = "
  <p>Тема письма: $form_subject </p>
  <p>Адрес отправителя: $project_name </p>
  <p>Имя заказчика: $user_name </p>
  <p>Емайл заказчика: $user_mail </p>
  <p>Телефон заказчика: $user_phone </p>
";

mail($admin_email, $form_subject, $msg );
exit;

?>
