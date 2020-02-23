<?php
 /* Здесь проверяется существование переменных */
  if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['form'])) {$form = $_POST['form'];}
 
/* Сюда впишите свою эл. почту */
 $address = "info@mionly.ru";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "\nТелефон: $phone\nИмя: $name\nКомментарий: $form"; 

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заявка с сайта мишки из роз'; //сабж
$email='info@mionly.ru'; // от кого
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');

?>
