<?php
class Information
{
    public $donnee;
    public $index;
    public function __construct($donnee,$index)
    {
        $this->donnee = $donnee;
        $this->index = $index;
    }
}