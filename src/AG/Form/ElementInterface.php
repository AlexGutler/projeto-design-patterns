<?php

namespace AG\Form;


interface ElementInterface
{
    public function tipo();
    public function classe();
    public function nome();
    public function render();
} 