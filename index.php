<?php
    require_once 'menu.php';
    define('CLASS_DIR','src/');
    set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
    spl_autoload_register();
?>

<div class="container">
    <div class="row">

<?php
    $form = new AG\Form\Types\FormGerador();

    echo $form->iniciaForm();
    echo $form->adicionaInput("Usuario","user","text");
    echo $form->finalizaForm();
?>


<?php
    require_once 'footer.php';
?>
