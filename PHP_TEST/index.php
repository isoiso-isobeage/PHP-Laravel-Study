<?php

$postal_code = '123-4567';

function checkedPostalCode($str) {
    $_postal_code = str_replace('-', '', $str);
    $length       = strlen($_postal_code);

    if ($length === 7) {
        return true;
    }

    return false;
}

var_dump(checkedPostalCode($postal_code));
