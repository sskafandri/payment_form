<?php
$recepient = "tymurtolochko@gmail.com";
$sitename = "test";
$name = trim($_POST["card-name"]);
$phone = trim($_POST["card-number"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";

$message = "Имя: $name \nCard number: $phone";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

mail("tymurtolochko@gmail.com","test", "tettet" );

?>