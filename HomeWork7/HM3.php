<?
$quest=array('0',', 1',', 2',', 3',', 4',' ,5',' ,6',' ,7',' ,8',' ,9',' ,10');
$i=0;
do {
    for($num=0; $num<count($quest)-$i; $num++){
    echo $quest[$num];
}
    echo '<br>';
    $i++;
}while ($i<=count($quest));
