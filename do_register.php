<?php

require_once __DIR__.'/boot.php';

$stmt = pdo()->prepare("SELECT * FROM `users` WHERE `username` = :username");
$stmt->execute(['username' => $_POST['username']]);

$stmt = pdo()->prepare("SELECT * FROM `users` WHERE `email` = :email");
$stmt->execute(['email' => $_POST['email']]);
if ($stmt->rowCount() > 0) {
    flash('Этот email уже занят.');
    header('Location: '.get_root());
    die;
}

$stmt = pdo()->prepare("SELECT * FROM `users` WHERE `comment` = :comment");
$stmt->execute(['comment' => $_POST['comment']]);

//добавление в базу
$stmt = pdo()->prepare("INSERT INTO `users` (`username`, `email`,`comment`) VALUES (:username, :email, :comment)");
$stmt->execute([
    'username' => $_POST['username'],
    'email' => $_POST['email'],
    'comment' => $_POST['comment'],
]);

flash('Спасибо за Ваше обращение! Наши менеджеры свяжутся с Вами в ближайшее время');
header('Location: '.get_root());