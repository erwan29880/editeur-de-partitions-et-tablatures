<?php


$notes= array(				//je remplace les notes au format abc pour pouvoir les mettre en forme en html + css
'/_B/',
'/_D/',
'/_E/',
'/_G/',
'/_A/',  
'/_b/',
'/_d/',
'/_e/',
'/_g/',
'/_a/',
'/=D/',  
'/=d/',  
'/=G,/',
'/=G/',   
'/=g/',
'/=c\'/',         
'/e\'/',
'/=C/',
'/\^D/',
'/=F/',
'/\^G/',
'/\^A/',
'/=c/',
'/\^d/',
'/=f/',
'/\^g/',
'/\^a/',
'/A,/',
'/B,/',
'/C/',
'/D/',
'/E/',
'/F/',
'/G/',
'/A/',
'/B/',
'/c/',
'/d/',
'/e/',
'/f/',
'/g/',
'/a/',
'/b/'
);

$chiffres= array(
'^A',
'^C',
'^D',
'^F',
'^G',
'^a',
'^c',
'^d',
'f^',
'g^',
'5p',
'8p',
'3p',
'6p', 
'9p',
'9\'p',
'10\'p',
'4t',
'1"p',
'4\'t',
'2"p',
'2"t',
'8t',
'3"p',
'8\'t',
'4"p',
'4"t',
'3t',
'4p',
'1"t',
'1"p',
'4\'p',
'6t',
'2"p',
'7t',
'7p',
'3"t',
'3"p',
'7\'p',
'10t',
'4"p',
'9\'t',
'10p'
);

$signe=preg_replace($notes, $chiffres, $signe);



?>