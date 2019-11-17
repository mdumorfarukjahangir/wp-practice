<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello Dolly</title>
    <?php 
    wp_head();
    ?>
</head>
<body <?php body_class(); ?>>
<?php 
    get_template_part('hero');
?>

