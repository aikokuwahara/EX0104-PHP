<?php	
	
    $r = $_POST['$r'];
    $i = $_POST['$i'];
    $qtd=0;

    for ($qtd < 0; $qtd <= $r; $qtd++) 
    {
        if ($qtd % $i==0){
        echo $qtd. "<br>";
        }
        
    }
		
?>
