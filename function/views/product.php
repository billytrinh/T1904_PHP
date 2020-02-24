<?php
    $products = [
        [
            "name"  =>"san pham 1",
            "price" => 10000,
            "qty"   => 2,
            "desc"  => "Day la mo ta san pham 1"
        ],
        [
            "name"  =>"san pham 2",
            "price" => 20000,
            "qty"   => 4,
            "desc"  => "Day la mo ta san pham 2"
        ],
        [
            "name"  =>"san pham 3",
            "price" => 12000,
            "qty"   => 2,
            "desc"  => "Day la mo ta san pham 3"
        ],
        [
            "name"  =>"san pham 4",
            "price" => 100000,
            "qty"   => 20,
            "desc"  => "Day la mo ta san pham 4"
        ],
        [
            "name"  =>"san pham 5",
            "price" => 50000,
            "qty"   => 1,
            "desc"  => "Day la mo ta san pham 5"
        ],
        [
            "name"  =>"san pham 6",
            "price" => 90000,
            "qty"   => 21,
            "desc"  => "Day la mo ta san pham 6"
        ],
        [
            "name"  =>"san pham 7",
            "price" => 5000,
            "qty"   => 4,
            "desc"  => "Day la mo ta san pham 7"
        ],
        [
            "name"  =>"san pham 8",
            "price" => 10000,
            "qty"   => 2,
            "desc"  => "Day la mo ta san pham 8"
        ],
        [
            "name"  =>"san pham 9",
            "price" => 22000,
            "qty"   => 5,
            "desc"  => "Day la mo ta san pham 9"
        ],
        [
            "name"  =>"san pham 10",
            "price" => 10000,
            "qty"   => 2,
            "desc"  => "Day la mo ta san pham 10"
        ],
    ];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <h1>Danh sach sản phẩm</h1>
    <a href="themsanpham.php">Thêm sản phẩm</a>
    <table class="table">
        <thead>
            <th>Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Desc</th>
        </thead>
        <tbody>
        <?php foreach ($products as $p): ?>
            <tr>
                <td><?php echo $p["name"];?></td>
                <td><?php echo $p["price"];?></td>
                <td><?php echo $p["qty"];?></td>
                <td><?php echo $p["desc"];?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
