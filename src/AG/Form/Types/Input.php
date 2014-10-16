<?php

namespace AG\Form\Types;


use AG\Form\ElementInterface;
use AG\Form\Types\Label;

class Input implements ElementInterface
{
    protected $type;
    protected $name;
    protected $element;

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
            $this->element .= '<div class="col-sm-10">';
        } else {
            $this->element .= '<div class="col-sm-10 col-sm-offset-2">';
        }

        $this->element .= '<input type="'.$this->type.'" class="form-control" name="'.$this->name.'">';
        $this->element .= '</div></div>';

        return $this->element;
    }

    public function tipo()
    {
        // TODO: Implement tipo() method.
    }

    public function classe()
    {
        // TODO: Implement classe() method.
    }

    public function nome()
    {
        // TODO: Implement nome() method.
    }
}