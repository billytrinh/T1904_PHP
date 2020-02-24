<?php
$aaa = 10;
$bbb = "hello world!";
$ccc = [1,2,3,4];

echo $bbb."<br/>";// echo gia_tri_muon_in_ra;
if($aaa > 9){
    echo "gia tri >= 10<br/>";
}else{
    echo "gia tri < 10<br/>";
}
// dung ham
tenHam(1999);
foreach ($ccc as $c){
    echo $c."<br/>";
}
function tenHam($var){
    echo $var;
}
$aaa = "xin chao";
