<?php

namespace FilterLib\Filters;

class Raw extends \FilterLib\Filter {
    
    public function filter($var) {
        return $var;
    }
}