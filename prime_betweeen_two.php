<?php

	$count = 13;  
$num = 5;  
while ($count < 16 )  
{  
$div_count=0;  
for ( $i=1; $i<=$num; $i++)  
{  
if (($num%$i)==0)  
{  
$div_count++;  
}  
}  
if ($div_count<3)  
{  
echo $num." , ";  
$count=$count+1;  
}  
$num=$num+1;  
}  

?>