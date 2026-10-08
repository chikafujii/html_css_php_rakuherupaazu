<?php

$name = $_POST["name"];
$email = $_POST["email"];
$date = $_POST["reservation_date"];

echo "お名前：" . $name . "<br>";
echo "メール：" . $email . "<br>";
echo "予約日：" . $date;

?>