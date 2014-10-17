<?php

namespace AG\Form\Types;


use AG\Form\ElementInterface;
use AG\Form\Types\Label;

/*
 * inputs without value: color, date, datetime, datetime-local, email, file, image, search
 *                       month, , tel, text, time, url, week, password,
 */

class InputBasic extends InputAbstract
{
    function __construct($type, $name, Label $label = null)
    {
        $this->type = $type;
        $this->name = $name;

        if (isset ($label))
        {
            $this->label = $label;
        }
    }

    public function render()
    {
        $this->element .= '<div class="form-group">';

        if (isset($this->label))
        {
            $this->element .= $this->label->render();
            $this->element .= '<div class="col-sm-6">';
        } else {
            $this->element .= '<div class="col-sm-6 col-sm-offset-2">';
        }

        $this->element .= '<input type="'.$this->type.'" class="form-control" name="'.$this->name.'">';
        $this->element .= '</div></div>';

        return $this->element;
    }
}