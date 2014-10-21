<?php
namespace AG\Form\Types;


use AG\Form\Interfaces\ElementInterface;
use AG\Form\Interfaces\FormInterface;

class Form implements FormInterface
{
   // protected $class;
    protected $action;
    protected $method;
    //protected $options = array();
    protected $elements = array();

    // explod e implod
    public function __construct($action = null, $method = null)
    {
        //$this->class = $class;
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

}