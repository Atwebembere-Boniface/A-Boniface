<?php
//a php script that captures my information.
// declaring  variables.
$name=readline("Enter your name:\n");
$address=readline("Enter your home address:\n");
$DOB=readline("Enter date of birth: ");
$cy=(int)readline("Enter current year: ");
$by=(int)readline("Enter birth year: ");
$age =$cy-$by;
echo(" $name! $address welcomes you home.Feel at home\n");
echo("Congulatulations! You are $age years old today");

?>
