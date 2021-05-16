<?php $title = "Tabuada" ?>

<?php include('includes/header.php') ?>

<?php include('functions/calculo.php') ?>

<main class="container" >
    <h1><?= $title ?></h1>

    <ul>
    <?php for($i = 1;$i <= 10;$i++): ?>
        <li> 2 * <?= $i ?> = <?= $i * 2 ?> </li>
    <?php endfor ?>
    </ul>
</main>

<?php 

$result = 10;

soma($result, 20)

?>

<p><?= $result ?></p>

<?php include('includes/footer.php') ?>