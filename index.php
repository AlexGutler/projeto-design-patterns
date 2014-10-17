<?php
    require_once 'menu.php';
    define('CLASS_DIR','src/');
    set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
    spl_autoload_register();
?>

<div class="container">
    <div class="row">

<?php
    $form = new \AG\Form\Types\Form('#','POST');

    $text = new \AG\Form\Types\Input\InputBasic('text','name', new \AG\Form\Utils\Label('nome','Nome:'));
    $email = new \AG\Form\Types\Input\InputBasic('email','email', new \AG\Form\Utils\Label('email','Email:'));
    $password = new \AG\Form\Types\Input\InputBasic('password','password', new \AG\Form\Utils\Label('password','Senha:'));
    $cor = new \AG\Form\Types\Input\InputBasic('cor','telefone', new \AG\Form\Utils\Label('cor','Cor:'));
    $radio1 = new \AG\Form\Types\Input\InputSelections('radio','gender','male','Male');
    $radio2 = new \AG\Form\Types\Input\InputSelections('radio','gender','female','Female');
    $submit = new \AG\Form\Types\Input\InputActions('submit','submit','Enviar');
    $reset = new \AG\Form\Types\Input\InputActions('reset','reset','Limpar');
    $checkbox = new \AG\Form\Types\Input\InputSelections('checkbox','remeber','remember','Lembrar Credenciais');

    $form->addElement($text);
    $form->addElement($email);
    $form->addElement($password);
    $form->addElement($cor);
    $form->addElement($radio1);
    $form->addElement($radio2);
    $form->addElement($checkbox);
    $form->addElement($submit);
    $form->addElement($reset);

    $form->render();
?>





<?php
    require_once 'footer.php';
?>
