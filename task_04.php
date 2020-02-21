<?php
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($a == $max_number){
            break;
        }
}
return $max_number;
}
echo max_array(array(10,5,6,7,));
?>