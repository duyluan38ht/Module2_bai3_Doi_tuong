<?php
include("Customer.php");
$c1 = new Customer("Nguyen Duy Luan", "26/01/1992", "Ha Tinh");
$c2 = new Customer("Nguyen Duy Dung", "17/12/1989", "Ha noi");
$c3 = new Customer("Nguyen Cong Trong", "28/04/1994", "Hai Duong");
$c4 = new Customer("Nguyen Van An", "22/04/1997", "Hai Phong");
$c5 = new Customer("Nguyen Van Binh", "18/0/51995", "Ha Noi");
$customer_list = array(
    "0" => $c1,
    "1" => $c2,
    "2" => $c3,
    "3" => $c4,
    "4" => $c5
);
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
<form method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="birth" placeholder="Birthday">
    <input type="text" name="address" placeholder="Address">
    <button type="submit">Add</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_REQUEST["name"];
    $b = $_REQUEST["birth"];
    $a = $_REQUEST["address"];
    $customer = new Customer($n, $b, $a);
    array_push($customer_list, $customer);
}
?>
<table border="1">
    <caption><h1>Danh Sach Khach Hang</h1></caption>
    <tr>
        <td>STT</td>
        <td>TEN</td>
        <td>Ngay sinh</td>
        <td>Dia chi</td>
        <td>Anh</td>
    </tr>
    <?php foreach ($customer_list as $index => $customer): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $customer->getName(); ?></td>
            <td><?php echo $customer->getBirthday(); ?></td>
            <td><?php echo $customer->getAddress(); ?></td>
            <td><?php echo $customer->getImg(); ?></td>
        </tr>

    <?php endforeach; ?>
</table>
</body>
</html>