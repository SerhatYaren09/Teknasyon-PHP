<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

/**
 * Ödev ile ilgili gerekli geliştirmeyi form.php
 * içerisinde yapmanız gerekiyor.
 */

require "form.php";

$postForm = Form::createPostForm("globals.php");
$getForm = Form::createGetForm("globals.php");
$lateForm = Form::createForm("globals.php", "POST");

function itCreateForm(Form $form): Form {
    $form->addField("Name", "name");
    $form->addField("Surname", "surname");
    $form->addField("Age", "age", 30);
    return $form;
}

$postForm = itCreateForm($postForm);
$getForm = itCreateForm($getForm);
$lateForm = itCreateForm($lateForm);

$lateForm->setMethod("GET");

$postForm->render();
echo "<hr>" . PHP_EOL;
$getForm->render();
echo "<hr>" . PHP_EOL;
$lateForm->render();
</body>
</html>