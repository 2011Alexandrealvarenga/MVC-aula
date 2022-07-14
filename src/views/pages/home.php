<?php $render('header'); ?>

Opa, jac
<?php echo $nome; ?>

<?php foreach($post as $posts):?>

    <?php echo $posts['pagina'];?> <br>

<?php endforeach;?>