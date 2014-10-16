<?php
namespace AG\Form\Types;


use AG\Form\ElementInterface;
use AG\Form\FormInterface;

class Form implements FormInterface
{
    protected $class;
    protected $action;
    protected $method;
    protected $options = array();
    protected $elements = array();

    // explod e implod
    public function __construct($class = null, $action = null, Array $options = array(), $method = null)
    {
        $this->class = $class;
        $this->action = $action;
        $this->method = $method;
    }

    public function openTag()
    {
        return '<form class="form-horizontal" action="#" method="POST" role="form" name="form">';
    }

    public function closeTag()
    {
       return '</form>';
    }

    public function addElement(ElementInterface $element)
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