
<?php
declare(strict_types=1);
function sum(int ...$ints){
    return array_sum($ints);
}
print(sum(21,'13',40.1));
?>