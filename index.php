<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr-fr" xml:lang="fr-fr" >
<head> 
<title>
</title>
</head>

<body bgcolor="black" style=" text-align:center ;" >

<?php 

	$url = '.';
	$nb=0;
	$tmp='#';

	if($dossier = opendir($url))
	{
		while(false !== ($fichier = readdir($dossier)))
		{
			if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != '1.jpg' && $fichier != 'index.html' && $fichier != 'gen.bat')
			{
			
			$resultat = substr($fichier, 0, 1); 

			if ( ($resultat == '1') || ($resultat == '2') || ($resultat == '3') || ($resultat == '4') || ($resultat == '5') || ($resultat == '6') || ($resultat == '7') || ($resultat == '8') || ($resultat == '9') || ($resultat == '0')){
				$let='#';
			}else{
				$let=$resultat;
			}
			
				if ( ($tmp != $let) || $nb == 0 ){
					echo '<h1 style="color:#404040; font-size:30pt; clear:both;">'.$let.'</h1>';
					$nb+=1;
					$tmp = $let;
				} 

				
			$src = $url.'/'. $fichier;

					echo '<div style="float:left; margin:2px;">
						<a href="'.$src.'" target=_blank >
							<span style= "color: red ;  text-align: right;">'.$fichier.'</span>
						<br />
							<img src= "'.$src.'/1.jpg" style="border:3px solid purple" width="220px"  height="320px" alt="img"/>
						</a>
					</div>';
			
			} // On ferme le if 
			  
		} // On termine la boucle

	echo '<br />';
	closedir($dossier);
	}
	else
		 echo 'Le dossier n\' a pas pu être ouvert';

?>

		</body>
	</html>
	
	
	
	