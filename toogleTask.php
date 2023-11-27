<?php
$index = intval($_POST["index"]);
$todos_json = file_get_contents('./todos.json');
$todos = json_decode($todos_json, true);

$response = [
    'succes' => true,
];

if ($index >= 0) {
$todos[$index]['done'] = !$todos[$index]['done'];


$response['todos'] = $todos;
$todos_string = json_encode($todos);
file_put_contents('./todos.json', $todos_string);
}

header('Content-type: application/json');
echo json_encode($response);