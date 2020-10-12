<?php
include "QuadraticEquation.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="number1" placeholder="nhap so a">
    <input type="text" name="number2" placeholder="nhap so b">
    <input type="text" name="number3" placeholder="nhap so c">
    <button type="submit">Tinh</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $a=$_REQUEST["number1"];
    $b=$_REQUEST["number2"];
    $c=$_REQUEST["number3"];

    $quadraticEquation=new QuadraticEquation($a,$b,$c);

    if($quadraticEquation->getDiscriminant()<0){
        echo "phuong trinh vo nghiem";
    }
    if($quadraticEquation->getDiscriminant()==0){
        echo "phuong trinh co nghiem kep".-$b/(2*$a);
    }
    if($quadraticEquation->getDiscriminant()>0){
        echo "nghiem1:".$quadraticEquation->getRoot1()."nghiem2:".$quadraticEquation->getRoot2();
    }
}
?>
</body>
</html>