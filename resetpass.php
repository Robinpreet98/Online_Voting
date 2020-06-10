<?php
$pass="";
for($i=1;$i<=6;$i++)
{
    $choice=rand(1,10);
    if($choice>5)
    {
        $x=rand(48,57);
    }
    else
    {
        $x=rand(65,90);
    }
    $pass=$pass.chr($x);
}
echo $pass;