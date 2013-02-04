<?php

namespace FilterLib\Filters;

class Email extends \FilterLib\Filter {
    
    public function filter($var) {
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }

}