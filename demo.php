<?php
// viet code PHP tai day
echo "hello";
$x = 10;
$x = "hello";// du lieu dong => kieu du lieu k chat che
$arr = [];// khai bao mang
$arr[0] = 15;
$arr[1] = 20;
$arr[2] = 25;

for ($i=0;$i<count($arr);$i++){
    //$arr[$i];
}
foreach ($arr as $a){
    //$a <=> $arr[$i];
}
$sv = [
    "name"=>"Nguyen van a",
    "age"=>13,
    "tel"=>"8912378891"
];
echo $sv["name"]."<br/>";
foreach ($sv as $s){
    echo "<h2>".$s."</h2>";// echo se de dinh dang html
}
foreach ($sv as $k=>$v){
    //echo "<h2>".$k.":".$s."</h2>";// echo se de dinh dang html
    echo "<h2>$k:$v</h2>";// echo se de dinh dang html
}
echo json_encode($sv);//json
// ham trong PHP
function tinhTong($a,$b){
    return $a+$b;
}
