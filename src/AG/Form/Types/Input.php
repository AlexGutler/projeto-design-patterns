<?php

namespace AG\Form\Types;


use AG\Form\ElementInterface;

class Input implements ElementInterface
{
    protected $type;
    protected $name;

    function __construct($type, $name)
    {
        $this->type = $type;
        $this->name = $name;
    }

    public function render()
    {
        return '<input type="'.$this->type.'" name="'.$this->name.'">';
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