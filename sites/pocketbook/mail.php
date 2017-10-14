<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST['name']) && (!empty($_POST['phone']))){
  	if (isset($_POST['name'])) {
  		if (!empty($_POST['name'])){
	      $uname = strip_tags($_POST['name']);
	      $unameFieldset = "Имя: ";
	     }
    }
    if (isset($_POST['phone'])) {
    	if (!empty($_POST['phone'])){
	      $uphone = strip_tags($_POST['phone']);
	      $uphoneFieldset = "Телефон: ";
	 	   }
    }
   

    $to = "glotov.mikhail@mail.ru";
    $subject = "Заявка с сайта Reader House";
    $message = "
                $unameFieldset $uname
                $uphoneFieldset $uphone";
    $send = mail ($to, $subject, $message);
        if ($send == 'true') {
          header("Location: /thanks.html");
        } else {
          header("Location: /fail.html");
        }
  } else {
  	header("Location: /fail.html");
  }
} else {
  header ("Location: http://readerhouse.ru"); // главная страница вашего лендинга
}
