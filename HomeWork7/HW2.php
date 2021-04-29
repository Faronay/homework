<?php
$num=1000;
$i=0;
do{
    $num=$num/2;
    $i++;
}while ($num>50);
echo 'Итоговое число:'. $num . '<br>';
echo 'Количество итераций:', $i;