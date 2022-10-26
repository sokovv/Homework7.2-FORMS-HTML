<?php

$fileName = $_POST['file_name'];

$uploaddir = '/Users/Валера/Desktop/Обучение(1)/Обучение(1)/Обучение/Курс основы php/Homework7(Forms)/Homework7.2-FORMS-HTML/upload/';
$extension = pathinfo($_FILES['content']['name'], PATHINFO_EXTENSION);

if ($fileName === '') {
    header('Location: index.html');
    exit();
}

if (move_uploaded_file($_FILES['content']['tmp_name'], "$uploaddir/$fileName.$extension")) {
    echo 'Файл корректен и был успешно загружен </br>';
    echo "Полный путь к файлу: " . pathinfo("$uploaddir/$fileName.$extension", PATHINFO_DIRNAME) . '</br>';
    echo 'Размер файла: ' . $_FILES['content']['size'] . PHP_EOL;
} else {
    header('Location: index.html');
}


//echo '<pre>';
//print_r($_POST);
//echo '<pre>';