<?php
//$a=20;
//$b=25;
/*
if($a==20 && $b==25)
if($a==20 and $b==25)
{
    echo"values match";
}
else{
    echo "value not match";
}
*/

/*
if($a==20 or $b==25)
if($a==20 || $b==25)
{
    echo"values match";
}
else{
    echo "value not match";
}
*/
/*
if($a!=20)// agr value match ho to false dega 
{
    echo"values does not match :<h3>False</h3>";
}
else{
    echo "value match: <h3>True</h3>";
}
*/
/*
if($a==20 xor $b==25) //agardono value true hoga to else part me jayega , agr alse hoto if part me jayega .isme only one alue true chahiye 
{
    echo"values does not match :<h3>False</h3>";
}
else{
    echo "value match: <h3>True</h3>";
}*/

$age=20;
if ($age >=18 && $age <= 23)
{
    echo "you are eligibal.</br>";
}

$age=20;
if(!($age >=18))
{
    echo "you are eligibal.<br>";
}


$age=2;
if ($age >=18 xor $age <= 23)
{
    echo "you are eligibal.";
}


?>