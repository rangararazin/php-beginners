<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$user = $db->query('SELECT * FROM users WHERE email = :email', ['email' => $_SESSION['user']['email']])->find();

//dd($user);
$currentUserId = $user['id'];


$notes = $db->query('select * from notes where user_id = :user_id', [
        'user_id' => $currentUserId
    ]
)->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);