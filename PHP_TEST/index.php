<?php

$global_variable = 'グローバル変数です。';

function check_scope($str) {
    $local_variable = 'ローカル変数です';

    // これ使うとわかりづらくなるから基本的に使うことはあまりない
    // global $global_variable;

    echo $str;
}

echo $global_variable;
echo $local_variable;

check_scope($global_variable);



// $postal_code = '123-4567';

// function checkedPostalCode($str) {
//     $_postal_code = str_replace('-', '', $str);
//     $length       = strlen($_postal_code);

//     if ($length === 7) {
//         return true;
//     }

//     return false;
// }

// var_dump(checkedPostalCode($postal_code));
