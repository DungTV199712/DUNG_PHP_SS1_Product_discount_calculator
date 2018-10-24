<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
    .login {
        height: 300px; width: 300px;
        margin: 2px 40%;
        padding: 10px;
        border: 1px #CCC solid;
    }
    .login input
    {
        padding: 5px; margin: 5px;
    }

</style>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = $_POST['PD'];
    $price = $_POST['LP'];
$discount = $_POST['DP'];
    if ($username === "admin" && $password === "admin") {
//        echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
 }
//    else{
//        echo "<h2><span style='color:red'>Login Error</span></h2>";
//    }
}
?>
<form method="post">
    <div class="login">
        <h2>Product Discount Product</h2>
        Product Description:<input type="text" name = 'PD' size = '30' placeholder="product description" /></br>
        List Price:<input type="text" name = 'LP' size = '30' placeholder="list price" /> </br>
        Discount Percent:<input type="text" name = 'DP' size = '30' placeholder="discount percent" />
        <input type="submit" value="Calculate Discount " />
    </div>

</form>

</body>
</html>