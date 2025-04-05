<?php	
	
    $r = $_POST['$r'];
    $i = $_POST['$i'];
    $qtd=$r;

    for ($qtd < $r; $qtd >= 0; $qtd--) 
    {
        if ($qtd % $i==0){
        echo $qtd. "<br>";
        }
        
    }
		
?>