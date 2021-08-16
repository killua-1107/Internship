<?php
$i=1001;
$k=$i;
$j=0;
while(floor($i))
{
    $j=$j*10+$i%10;
    $i=floor($i/10);
}
if($k==$j)
{
    echo "$k is Palindrome";
}
else
{
    echo "$k is not Palindrome";
}
?>