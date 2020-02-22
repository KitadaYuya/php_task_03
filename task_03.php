<?php
function multiplication($arr) {
    $result = 1;
    foreach($arr as $a) {
        $result *= $a;
}
return $result;
}
echo multiplication(array(1,3,5,7,9));
?>