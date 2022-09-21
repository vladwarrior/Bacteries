<?php

require_once 'tacts.php';

$pattern_name = '/\w{2,}/';
$pattern_phone = '/^(\+)?((\d{2,3}) ?\d|\d)(([ -]?\d)|( ?(\d{2,3}) ?)){5,12}\d$/';
$pattern_tacts = '/^[1-9]+[0-9]*$/';

if (!empty($_POST)) {
    if (empty($_POST['name'])) {
        $errors[] = "Заполните поле name";
    } elseif (!preg_match($pattern_name, $_POST['name'])) {
        $errors[] = "Имя должно содержать только буквы";
    }
    if (empty($_POST['phone'])) {
        $errors[] = "Заполните поле phone";
    } elseif (!preg_match($pattern_phone, $_POST['phone'])) {
        $errors[] = "Телефон должен содержать только цифры и символы '+, -'";
    }
    if (empty($_POST['email'])) {
        $errors[] = "Заполните поле email";
    }
    if (empty($_POST['Tacts'])) {
        $errors[] = "Заполните поле Tacts";
    } elseif (!preg_match($pattern_tacts, $_POST['Tacts'])) {
        $errors[] = "Поле может содержать только число";
    }

    if (!empty($errors)) {
        foreach ($errors as $err) {
            echo "<strong>Error: $err</strong><br>";
        }
    }
    echo "Всего бактерий: ";
    echo calcTacts($_POST['Tacts']);
}


?>