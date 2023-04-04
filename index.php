<?php


require 'function.php';
require 'Database.php';

// require 'router.php';

$db = new Database();

$posts = $db->query("select * from posts;")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);


// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }
