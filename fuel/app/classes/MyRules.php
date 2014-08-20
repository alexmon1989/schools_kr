<?php

class MyRules
{
    public static function _validation_is_float($val)
    {
        Validation::active()->set_message('is_float', 'Поле <b>:label</b> должно содержать числовое значение.');
        return is_numeric($val);        
    }
}