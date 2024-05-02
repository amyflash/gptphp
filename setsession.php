<?php
$context = json_decode($_POST['context'] ?: "[]") ?: [];

if ((isset($_POST['model'])) && (!empty($_POST['model']))) {
    $_SESSION['model'] = $_POST['model'];
}

$postData = [
    "model" => $_SESSION['model'],//"gpt-3.5-turbo",
    "temperature" => 0,
    "stream" => true,
    "messages" => [],
];



if (!empty($context)) {
    $context = array_slice($context, -5);
    foreach ($context as $message) {
        $postData['messages'][] = ['role' => 'user', 'content' => str_replace("\n", "\\n", $message[0])];
        $postData['messages'][] = ['role' => 'assistant', 'content' => str_replace("\n", "\\n", $message[1])];
    }
}
$postData['messages'][] = ['role' => 'user', 'content' => $_POST['message']];
$postData = json_encode($postData);
session_start();
$_SESSION['data'] = $postData;
if ((isset($_POST['key'])) && (!empty($_POST['key']))) {
    $_SESSION['key'] = $_POST['key'];
}



echo '{"success":true}';
