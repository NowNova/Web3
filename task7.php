<?php
function printStringReturnNumber(): int
{
    echo "Строка \n";
    return 99;
}

$my_num = printStringReturnNumber();
echo $my_num;