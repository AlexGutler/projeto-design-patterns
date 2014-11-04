<?php
namespace AG\Form\Types;


use AG\Form\Interfaces\ElementInterface;
use AG\Form\Interfaces\FormInterface;
use AG\Form\Types\Fieldset\Fieldset;
use AG\Form\Types\Input\InputBasic;

class Form implements FormInterface
{
    protected $action;
    protected $method;
    protected $elements = array();

    public function __construct($action = null, $method = null)
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function openTag()
    {
        return '<form class="form-horizontal" action="'.$this->action.'" method="'.$this->method.'" role="form" name="form">';
    }

    public function closeTag()
    {
       return '</form>';
    }

    public function createField(ElementInterface $element)
    {
        $this->elements[] = $element;
    }

    public function render()
    {
        echo $this->openTag();

        foreach ($this->elements as $value){
            echo $value->render();
        }

        echo $this->closeTag();
    }

    public function populate()
    {

    }

}