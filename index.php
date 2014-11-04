<?php
    require_once 'menu.php';
    require_once 'fixtures/retornaCategorias.php';

    define('CLASS_DIR','src/');
    set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
    spl_autoload_register();
?>

<div class="container">
    <div class="row">

<?php
    $form = new \AG\Form\Types\Form('#','POST');

    $fieldset = new \AG\Form\Types\Fieldset\Fieldset(new \AG\Form\Utils\Legend('Cadastro de Produtos'));

    $nome = new \AG\Form\Types\Input\InputBasic('text','nome', new \AG\Form\Utils\Label('nome','Nome:'));
    $valor = new \AG\Form\Types\Input\InputBasic('text','valor', new \AG\Form\Utils\Label('valor','Valor:'));
    $descricao = new \AG\Form\Types\Input\InputBasic('text','descricao', new \AG\Form\Utils\Label('descricao','Descrição:'));

    $options = retornaCategorias();

    $select = new \AG\Form\Types\Select\Select('categorias',$options, new \AG\Form\Utils\Label('categoria','Categoria:'));

    $fieldset->addElement($nome);
    $fieldset->addElement($valor);
    $fieldset->addElement($descricao);
    $fieldset->addElement($select);

    $form->createField($fieldset);

    $form->render();
?>


<?php
    require_once 'footer.php';
?>
