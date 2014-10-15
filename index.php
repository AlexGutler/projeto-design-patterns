<?php
    require_once 'menu.php';
    define('CLASS_DIR','src/');
    set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
    spl_autoload_register();
?>

<div class="container">
    <div class="row">

<?php
    $form = new \AG\Form\Types\Form();

    $text = new \AG\Form\Types\Input('text','nome');
    $password = new \AG\Form\Types\Input('password','senha');

    $form->addElement($text);
    $form->addElement($password);

    $form->render();
?>





<?php
    require_once 'footer.php';
?>
