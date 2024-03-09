<?php
$r=[1,2,3,4,5,6,7,8,9,10];

$p=array_filter($r,function($a){
  return $a%2==0;
});
print_r($p);

echo "Adada";

function get_odd($a)
{
    if($a%2 !=0) return $a;
}
$p=array_filter($r,"get_odd");
  print_r($p);

$k=10;
for($i=0;$i<$k;$i++)
{
  //$i=3;
  echo $i;
  $k=3;
}  
echo "ada";
echo $i;
echo "Asa";