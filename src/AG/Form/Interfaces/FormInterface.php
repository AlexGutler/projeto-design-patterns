<?php

namespace AG\Form\Interfaces;


interface FormInterface
{
    public function render ();
    public function openTag();
    public function closeTag();
    public function addElement(ElementInterface $element);
} 