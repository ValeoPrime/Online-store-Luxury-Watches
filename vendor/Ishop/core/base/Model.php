<?php


namespace Ishop\base;


abstract class Model
{
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct(){

    }

}