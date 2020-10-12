<?php
include "Customer.php";
$a = $customer = new Customer("Nguyen Duy Luan", "29", "26/01/1992", "Ha Noi");
$b = $customer = new Customer("Nguyen Duy Luan", "29", "26/01/1992", "Ha Noi");
$c = $customer = new Customer("Nguyen Duy Luan", "29", "26/01/1992", "Ha Noi");
$d = $customer = new Customer("Nguyen Duy Luan", "29", "26/01/1992", "Ha Noi");
$f = $customer = new Customer("Nguyen Duy Luan", "29", "26/01/1992", "Ha Noi");
$customer_lish = array(
    0 => $a,
    1 => $b,
    2 => $c,
    3 => $d,
    4 => $f,
)
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
<form action=""method="post">
    <input type="text" name="name" placeholder="Ten">
    <input type="text" name="age" placeholder="Tuoi">
    <input type="text" name="birth" placeholder="ngay sinh">
    <input type="text" name="address" placeholder="Cho O">
    <button type="submit">ADD</button>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $a=$_REQUEST["name"];
        $b=$_REQUEST["age"];
        $c=$_REQUEST["birth"];
        $d=$_REQUEST["address"];

        $customer=new Customer($a,$b,$c,$d);
        array_push($customer_lish,$customer);
    }
    ?>
</form>
<table border="1">
    <caption><h2>DANH SACH KHACH HANG</h2></caption>
    <tr>
        <td>STT</td>
        <td>TEN</td>
        <td>TUOI</td>
        <td>NGAY SINH</td>
        <td>CHO O</td>
    </tr>
    <?php foreach ($customer_lish as $index => $customer): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $customer->getName(); ?></td>
            <td><?php echo $customer->getAge(); ?></td>
            <td><?php echo $customer->getBirthday(); ?></td>
            <td><?php echo $customer->getAddress(); ?></td>
        </tr>
    <?php endforeach ?>
</table>
</body>
</html>