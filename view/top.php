<?php
    require_once('lib/print.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
    <?php
       print_title();
    ?>  
    
    </title>
    <style>
    a:hover{
            background-color : pink;
           }
    </style>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?php
            print_list();
        ?>
    </ol>