<?php
class mydetail
{
    public $name;
    public $age;
    public $email;

}

$myObj=new mydetail();

$myObj->name="mouli";
$myObj->age=20;
$myObj->email="mouli@gmail.com";

$myJSON = json_encode($myObj);

echo $myJSON;
?>