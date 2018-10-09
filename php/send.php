<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['fio']) and !isset($_POST['email'])){
} else {
// принимаем данные из POST массива
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$textarea = $_POST['textarea'];
// преобразуем все символы
$first_name = htmlspecialchars($first_name);
$last_name = htmlspecialchars($last_name);
$email = htmlspecialchars($email);
$textarea = htmlspecialchars($textarea);
// декодируем url
$first_name = urldecode($first_name);
$last_name = urldecode($last_name);
$email = urldecode($email);
$textarea = urldecode($textarea);
// удаляем пробелы с начала и конца строки, если таковые имеются
$first_name = trim($first_name);
$last_name = trim($last_name);
$email = trim($email);
$textarea = trim($textarea);
// Отправляем полученные данные
if (mail("example@mail.ru", "Заявка с сайта", "Имя:".$first_name "Фамилия:".$last_name.". E-mail: ".$email ,"From: example2@mail.ru \r\n"<br>"Текст сообщения".$textarea))
{
	echo "сообщение успешно отправлено";
} else { 
    echo "при отправке сообщения возникли ошибки"; 
}
}
?>