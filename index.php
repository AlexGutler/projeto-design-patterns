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
    $textarea = new \AG\Form\Types\TextArea\TextArea('mensagem',3,new \AG\Form\Utils\Label('mensagem','Mensagem:'));
    $radio1 = new \AG\Form\Types\Input\InputSelections('radio','gender','male','Male');
    $radio2 = new \AG\Form\Types\Input\InputSelections('radio','gender','female','Female');
    //$submit = new \AG\Form\Types\Input\InputActions('submit','submit','Enviar');
    $button = new \AG\Form\Types\Button\Button('submit','submit','enviar','Enviar');
    $checkbox = new \AG\Form\Types\Input\InputSelections('checkbox','remeber','remember','Lembrar Credenciais');

    $options = array
    (
        1 => array('volvo','Volvo'),
        2 => array('bmw',"BMW"),
        3 => array('audi',"Audi")
    );

    $select = new \AG\Form\Types\Select\Select('carros',$options,new \AG\Form\Utils\Label('carros','Carro:'));

    $form->createField($text);
    $form->createField($email);
    $form->createField($password);
    $form->createField($cor);
    $form->createField($textarea);
    //$form->addElement($select);
    $form->createField($radio1);
    $form->createField($radio2);
    $form->createField($checkbox);
    //$form->addElement($submit);
    $form->createField($button);

    $form->render();
?>


<?php
    require_once 'footer.php';
?>
