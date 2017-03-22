<?php

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['text'])){ 
//проверка на наличие данных в полях name, e-mail, message, поле тема необязательно для заполнения
	$theme = $_POST['theme'];
  	$message .='Имя: '.$_POST['name'] . '<br>'; 
  	$message .='Email: '.$_POST['email'] . '<br>'; 
  	$message .='Сообщение: '.$_POST['text'] . '<br>';
 	
  	 if (mail('k_kobzev@mail.ru', $theme, $message)){
  		
    echo "Сообщение отправлено!";
  } else {
    echo "Ошибка при отправке!";
  }
} else {
  echo "Ошибка: Заполните все поля!";
}