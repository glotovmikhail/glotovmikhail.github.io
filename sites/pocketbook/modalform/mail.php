<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST['uname']) && (!empty($_POST['uemail']) || !empty($_POST['uphone']))){
  	if (isset($_POST['uname'])) {
  		if (!empty($_POST['uname'])){
	      $uname = strip_tags($_POST['uname']);
	      $unameFieldset = "Имя пославшего:";
	     }
    }
    if (isset($_POST['uphone'])) {
    	if (!empty($_POST['uphone'])){
	      $uphone = strip_tags($_POST['uphone']);
	      $uphoneFieldset = "Телефон:";
	    }
    }
    

    $to = "glotov.mikhail@mail.ru"; /*Укажите адрес, на который должно приходить письмо*/
    $subject = "Заявка с сайта";
    $message = "$unameFieldset $uname
                $uphoneFieldset $uphone";

    $send = mail ($to, $subject, $message);
        if ($send == 'true') {
            echo '<p class="success">Спасибо за отправку вашего сообщения!</p>';
        } else {
          echo '<p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p>';
        }
  } else {
  	echo '<p class="fail">Ошибка. Вы заполнили не все обязательные поля!</p>';
  }
} else {
  header ("Location: http://readerhouse.ru"); // главная страница вашего лендинга
}
