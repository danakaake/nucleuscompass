<?php $page="alternatetherapy";?>
<!DOCTYPE html>
<html>
    <head>
        <title>Nucleus Compass</title>
        <link rel="stylesheet" href="/bootstrap.css"/>
        <script src="/jquery-1.11.2.min.js"></script>
        <script src="/bootstrap.js"></script>
    </head>
    <body>
<?php require("nav.php");  ?>
              
       <div class="container">
     <h1>Alternate Forms of Therapy</h1>
    </div>
    

<?php

$link = mysql_connect('localhost', 'root', 'freud');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}


$db_selected = mysql_select_db('Nucleus', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}

$posts = mysql_query("SELECT * FROM posts WHERE category = 'therapies'");
if (!$posts) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}


?>
<div class="container">
<table>
<?php 
    while($row = mysql_fetch_assoc($posts) ){
    ?>
    
    <tr> 
    <td>
     <h1><?=$row['title'];?></h1>
     <h6><?=$row['date'];?></h6>
     <p><?=substr($row['post'], 0, 10);?></p>
     
    </td>
    </tr>
    
    <?php
    }
    ?>
       </table> 
       </div>
</body>
</html>