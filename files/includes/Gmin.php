<?php

$notes= array(				//je remplace les notes au format abc pour pouvoir les mettre en forme en html + css
'/\^A/',
'/\^C/',
'/\^D/',
'/\^F/',
'/\^G/',
'/\^a/',
'/\^c/',
'/\^d/',
'/\^f/',
'/\^g/',
'/_G/',
'/_g/',
'/G,/',
'/_A/', 
'/_a/',	
'/G/',
'/g/',   
'/A,/',
'/A/',
'/a/', 
'/=B,/',  
'/=B/',
'/=b/',
'/B/',
'/b/',
'/_D/',   
'/_d/', 
'/C/',  
'/c\'/',
'/c/',
'/d\'/', 
'/D/',
'/d/',
'/=E/',      
'/=e\'/', 
'/=e/', 
'/E/',
'/e/', 
'/F/',
'/f/'
);

$chiffres= array(
'_B',
'_D',
'_E',
'_G',
'_A',  
'_b',
'_d',
'_e',
'_g',
'_a',
'6t',
'10t',
'3p',
'2"p',
'4"p',
'5\'p',
'8\'p',
'3t',
'5\'t',
'9\'t',
'2\'t',
'6\'t',
'10\'t',
'2"t',
'4"t',
'1"t',
'3"t',
'4t',
'9\'p',
'8t',
'11p',
'5p',
'8p',
'5t',
'10\'p',
'9t',
'1"p',
'3"p',
'4\'t',
'8\'t'
);


$signe=preg_replace($notes, $chiffres, $signe);


?>