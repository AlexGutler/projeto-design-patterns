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

    $text = new \AG\Form\Types\InputBasic('text','name', new \AG\Form\Types\Label('nome','Nome:'));
    $email = new \AG\Form\Types\InputBasic('email','email', new \AG\Form\Types\Label('email','Email:'));
    $password = new \AG\Form\Types\InputBasic('password','password', new \AG\Form\Types\Label('password','Senha:'));
    $cor = new \AG\Form\Types\InputBasic('cor','telefone', new \AG\Form\Types\Label('cor','Cor:'));
    $radio1 = new \AG\Form\Types\InputSelections('radio','gender','male','Male');
    $radio2 = new \AG\Form\Types\InputSelections('radio','gender','female','Female');
    $checkbox = new \AG\Form\Types\InputSelections('checkbox','remeber','remember','Lembrar Credenciais');

    $submit = new \AG\Form\Types\InputActions('submit','submit','Enviar');
    $reset = new \AG\Form\Types\InputActions('reset','reset','Limpar');

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
