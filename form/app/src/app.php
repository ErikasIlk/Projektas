<?php
    if(isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $age = trim($_POST['age']);
    $offers = trim($_POST['offers']);
    
    if(!empty($name) && !empty($lastName) && !empty($email) && !empty($age) && !empty($offers) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $from = "$email";
            $to = "erikas.ilkevic@gmail.com";
            $subject = "Nauja forma";
            $author = 'Nuo ' . $name . ' ' . $lastName . ', ' . $age . ', ' . $email;
            $message = htmlspecialchars($offers);
            mail($to, $subject, $author, $message, $from);
            header('Location: formAfter.php');
        }
include('db.php');
    }
