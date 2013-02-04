<?php

namespace FilterLib;

function filter($filter, $var) {
    return Filter::factory($filter)->filter($var);
}

function validate($filter, $var) {
    return Filter::factory($filter)->validate($var);
}