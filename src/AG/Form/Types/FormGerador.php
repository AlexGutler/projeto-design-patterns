<?php

namespace AG\Form\Types;

use AG\Form\FormInterface;

class FormGerador implements FormInterface
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

    public function addElement($label, $nomeCampo, $type)
    {
        $this->formNew .= '<div class="form-group">';
        $this->formNew .= '<label for="'.$nomeCampo.'" class="col-sm-2 control-label">'.$label.'</label>';
        $this->formNew .= '<div class="col-sm-10">';
        $this->formNew .= '<input type="'.$type.'" class="form-control" name="'.$nomeCampo.'">';
        $this->formNew .= '</div></div>';

        return $this->formNew;
    }

    public function openTag()
    {
        return $this->beginForm .= '<form class="form-horizontal" action="#" method="POST" role="form" name="form">';
    }

    public function closeTag()
    {

        $this->endForm .= '</form>';

        return $this->endForm;
    }

    public function render()
    {

    }
} 