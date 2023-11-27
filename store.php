<?php
$new_todo = $_POST["todo"] ?? '';

$response = [
    'succes' => true,
];

if ($new_todo ) {
$todos_json = file_get_contents('./todos.json');
$todos = json_decode($todos_json, true);


$todo = [
    'text' => $new_todo,
    'done' => false,
];

$todos[] = $todo;
$response ['todos'] = $todos;
$todos_string = json_encode($todos);
file_put_contents('./todos.json', $todos_string);
}

header('Content-type: application/json');
echo json_encode($response);