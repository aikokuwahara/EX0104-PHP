<?php	
	
    $r = $_POST['$r'];
    $qtd=$r;
    for ($qtd < $r; $qtd >= 0; $qtd--) 
    {
        if ($qtd%2==0){
        echo $qtd. "<br>";
        }
    }
	
			
?>