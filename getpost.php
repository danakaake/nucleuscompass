<?php

$link = mysql_connect('localhost', 'root', 'freud');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}


$db_selected = mysql_select_db('Nucleus', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}

$id = $_GET['id'];
if(!$id) {
    echo "Post not specified.";
    exit;
}

$result = mysql_query("SELECT * FROM posts WHERE id = ".$id);
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}

$row = mysql_fetch_row($result);

echo $row[0]; 
echo $row[1];
echo $row[2];
echo $row[4];
?>

