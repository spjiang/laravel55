<?php
//3*2*1
function recursive($i)
{
    $sum = 1;
    echo "recursive()当前参数\$i值为：{$i}\n\r";
    if (1 == $i) {
        echo "\$i={$i};\$sum={$sum}\n";
        return 1;
    } else {
        $sum = $i * recursive($i - 1);
    }
    echo "\$i={$i};\$sum={$sum}\n";
    return $sum;
}

echo recursive(5);
die;

?>