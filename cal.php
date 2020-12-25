<?php
$result = (float)$_POST['preval'];
$value = (float)$_POST['display']; 
$oper = $_POST['oper'];

    if($oper=='+')
    {
        $result=$value+$result;
        echo"$result";
    }
elseif($oper=='-')
{
    $result=$result-$value;
    echo"$result";
}
elseif($oper=='*')
{   if($result=="0")
    {
    $result=1;
    }
    $result=$value*$result;
    echo"$result";
}
elseif($oper=='/')
{   if($result=="0")
    {
    $result=1;
    }
    $result=$result/$value;
    echo"$result";
}
else{
    echo"$result";
}

   
