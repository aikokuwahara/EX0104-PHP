<?php	
	
    $r = $_POST['$r'];
    $qtd = 0;
    for ($qtd < 1; $qtd <= $r; $qtd++) 
    {
        if ($qtd%2==0){
        echo $qtd. "<br>";
        }
    }
	
			
?>