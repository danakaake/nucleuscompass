<?php

$link = mysql_connect('localhost', 'root', 'freud');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db('Nucleus', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}

function mysql_insert($table, $inserts) {
    $values = array_map('mysql_real_escape_string', array_values($inserts));
    $keys = array_keys($inserts);
        
    return mysql_query('INSERT INTO `'.$table.'` (`'.implode('`,`', $keys).'`) VALUES (\''.implode('\',\'', $values).'\')');
}

//$result = mysql_query("SELECT * FROM posts");

// while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
//     printf($row["title"] , ["date"], ["post"] );
// }


mysql_free_result($result);


$title = $_POST["title"];
$date = $_POST["date"];
$post = $_POST["post"];
$category = $_POST["category"];
$id = $_POST["id"];

mysql_insert("posts", array("title" => $title, "date" => $date, "category" => $category, "post" => $post));
if(mysql_error()){
    die ("Failed to add post.");
}



?>

