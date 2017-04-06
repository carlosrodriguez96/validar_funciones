<?PHP
/**
* Desarrollado por:
* Carlos Arturo rodriguez
* 
*/		


	if (isset($_GET['funcion'])) {//se pregunta por la variable enviada
		$funcion=$_GET['funcion'];//captura de la variable
		if (function_exists($funcion)) //se pregunta por la existencia de la funcion 
			{
				//mysqli está instalado
				$resultado="Si, la función  ".$funcion."    existe";
			}else{
				$resultado=="No, la función  ".$funcion."   no existe";
			}
			$outp = "";	      
			$outp .= '{"resultado":"'.$resultado.'"}';	            
			$outp ='{"records":['.$outp.']}';
		    
		    
		    echo($outp);
	}
			
			         
		        
		        
   

	/*echo "<br><br>";

	//Esta otra función se encontró en http://stackoverflow.com/questions/16254413/php-5-installed-also-mysqli-is-installed-but-not-compiling-in-mac-lion
	echo "extension_loaded mysqli ".extension_loaded('mysqli');

	echo "<br><br>";

	echo phpinfo();*/
?>
