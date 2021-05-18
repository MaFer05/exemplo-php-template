<?php 
include 'vendor/autoload.php';

$title = 'Home Page';
$val = 10;
?>

<?php getHeader('home') ?>

        <h1>Home Page</h1>
        <?= soma($val, 20) ?>
        
<?php getFooter() ?>