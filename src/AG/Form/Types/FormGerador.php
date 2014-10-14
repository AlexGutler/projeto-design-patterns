<?php

namespace AG\Form\Types;

use AG\Form\Form;

class FormGerador implements Form
{
    private $form;
    private $formNew;
    private $beginForm;
    private $endForm;

    public function setForm($form)
    {
        $this->form .= $form;
    }

    public function getForm()
    {
        return $this->form;
    }

    public function adicionaInput($label, $nomeCampo, $type)
    {
        $this->formNew .= '<div class="form-group">';
        $this->formNew .= '<label for="'.$nomeCampo.'" class="col-sm-2 control-label">'.$label.'</label>';
        $this->formNew .= '<div class="col-sm-10">';
        $this->formNew .= '<input type="'.$type.'" class="form-control" name="'.$nomeCampo.'">';
        $this->formNew .= '</div></div>';

        return $this->formNew;
    }

    public function iniciaForm()
    {
        return $this->beginForm .= '<form class="form-horizontal" action="#" method="POST" role="form" name="form">';
    }

    public function finalizaForm()
    {
        $this->endForm .= '<div class="form-group">';
        $this->endForm .= '<div class="col-sm-offset-2 col-sm-10">';
        $this->endForm .= '<button type="submit" class="btn btn-default">Enviar</button>';
        $this->endForm .= '</div></div></form>';

        return $this->endForm;
    }

    public function render()
    {

    }
} 