<?php	

echo "Masukan Angka : ";
        $o = trim(fgets(STDIN));

for ($i=1; $i<=$o; $i++)	
{	 
for($j=1;$j<=$i;$j++)	  
{	  	
echo " $j ";	 
}	  	
echo "\n";   	
}  
?>