<?php	
	
    $r = $_POST['$r'];
    $qtd=0;
    $t;

    for ($qtd = 1; $qtd <= 10; $qtd++) 
    {
        $t=$r*$qtd;
        echo $t. "<br>";
        
    }
	
			
?>
