<?php

namespace AG\Form\Types\Fieldset;


use AG\Form\Interfaces\ElementInterface;
use AG\Form\Utils\Legend;

class Fieldset implements ElementInterface
{
    protected $elements = array();
    protected $field;

    function __construct(Legend $legend = null)
    {
        $this->legend = $legend;
    }

    public function openTag()
    {
        return '<legend>';
    }

    public function closeTag()
    {
        return '</legend>';
    }

    public function addElement(ElementInterface $element)
    {
        $this->elements[] = $element;
    }

    public function render()
    {
        $field = $this->openTag();

        if (isset($this->legend))
        {
            $field .= $this->legend->render();
        }

        foreach ($this->elements as $value){
            $field .= $value->render();
        }

        $field .= $this->closeTag();

        return $field;
    }
}