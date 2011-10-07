<?php

$s->trim_array = function($array) {
        foreach ($array as $value) {
            if (is_string($value)) {
                $newarray[]=trim($value);
            } else {
                $newarray[] = $value;
            }
        }
        return $newarray;
    };
