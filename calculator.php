<?php

class Sales_Tax
{
    public $product_name;
    public $product_price;
    public $is_imported;
    public $is_other;

    public $sales_tax = 0.10;
    public $ID_tax = 0.05;

    public function __contruct(string $w, float $x, bool $y, bool $z, $a, $b)
    {
        $this->product_name = $w;
        $this->product_price = $x;
        $this->is_imported = $y;
        $this->is_other = $z;
        $this->sales_tax = $a;
        $this->ID_tax = $b;
    }

    public function tax()
    {
        if ($this->is_other) {
            if ($this->is_imported) {
                $price1 = ($this->product_price + $this->product_price * $this->sales_tax + $this->product_price * $this->ID_tax);
                return $price1;
            } else {
                $price2 = ($this->product_price + $this->product_price * $this->sales_tax);
                return $price2;
            }
        } else {
            $price3 = $this->product_price;
            return $price3;
        }
    }
}


if (isset($_POST["submit"])) {
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $is_imported = $_POST["is_imported"];
    $is_other = $_POST["is_other"];
}

$total = new Sales_Tax($product_name, $product_price, $is_imported, $is_other);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sales Tax Calculator</title>
</head>

<style>
    .table {
        border: 1px solid black;
    }

    .table td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .table p {
        margin: 0;
    }
</style>

<body>
    <h1 class="text-center my-5">Sales Tax Calculator</h1>

    <form action="/calculator.php" method="POST">
        <input type="text" name="product_name" id="product_name" placeholder="Product Name">
        <input type="text" name="product_price" id="product_price" placeholder="Product Price">
        <select name="is_other" id="is_other">
            <option value="default">Other Product</option>
            <option value="0">Yes</option>
            <option value="1">No</option>
        </select>
        <select name="is_imported" id="is_imported">
            <option value="default">Imported</option>
            <option value="0">Yes</option>
            <option value="1">No</option>
        </select>
        <input type="submit" value="Calculate">
    </form>

    <table class="table">
        <tr>
            <td>
                <b>input1:</b>
                <p>1 <?php echo $product_name; ?> at <?php echo $product_price; ?></p>
            </td>
            <td>
                <b>output1:</b>
                <p>1 <?php echo $product_name; ?> at <?php echo $price3; ?></p>
                <p>Sales Tax: <?php echo $sales_tax; ?></p>
            </td>
        </tr>
        <tr>
            <td>
                <b>input2:</b>
                <p>1 imported box of <?php echo $product_name; ?> at <?php echo $product_price; ?></p>
            </td>
            <td>
                <b>output2:</b>
                <p>1 imported box of <?php echo $product_name; ?> at <?php echo $price1; ?></p>
                <p>Sales Tax: <?php echo $sales_tax + $ID_tax; ?></p>
            </td>
        </tr>
        <tr>
            <td>
                <b>input3:</b>
                <p>1 imported bottle of <?php echo $product_name; ?> at <?php echo $product_price; ?></p>
            </td>
            <td>
                <b>output3:</b>
                <p>1 imported bottle of <?php echo $product_name; ?> at <?php echo $price2; ?></p>
                <p>Sales Tax: <?php echo $sales_tax; ?></p>
            </td>
        </tr>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>