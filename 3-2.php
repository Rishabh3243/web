<?php  
function adder($str2)  
{  
    $str2='Call By Value';
    return $str2;  
}  
$str = 'Hello ';  
adder($str);  
echo $str;  
?>  


<br><br>

<?php  
function increment($i)  
{  
    ++$i;  
}  
$i=10;  
increment($i);  
echo $i;  
?>  	