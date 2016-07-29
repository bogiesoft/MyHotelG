<?php
$recepient = "test14785236985@mail.ru";
$sitename = "Усадьба НИКА";

$username = trim($_POST["username"]);
$phone = trim($_POST["phone"]);
$people = trim($_POST["people"]);
$rooms = trim($_POST["rooms"]);
$datepickerfrom = trim($_POST["datepicker-from"]);
$datepickerto = trim($_POST["datepicker-to"]);
$email = trim($_POST["email"]);
$comments = trim($_POST["comments"]);
$message = "Имя: $username \nТелефон: $phone \nКоличество человек: $people   \nКатегория проживания: $rooms \nДата заезда: $datepickerfrom  
         \nДата выезда: $datepickerto \nE-mail: $email \nДополнительно: $comments";
$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");