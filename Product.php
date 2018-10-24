
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
    .display {
        height: 200px; width: 500px;
        margin: 2px 40%;
        padding: 10px;
        border: 2px mediumblue solid;
        text-align: left;
    }
    .display input
    {
        padding: 5px; margin: 5px;
    }
    h2{
        color: darkblue;
        margin: 2px 15%;
    }
</style>
<body>
<?php
$Discount_Amount = 0;
$Discount_Price = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Product = $_POST[""];
    $List_Price = trim($_POST[""]);
    $Discount = trim($_POST[" "]);
    $Discount_Amount = $List_Price * $Discount * 0.1;
    $Discount_Price = $List_Price - $Discount_Amount;
}
?>
<form method="post">
    <div class="display">
        <h2>Product Discount Calculator</h2><br/>
        <label>Product Description: </label>
        <span> <?php echo $Product ?></span><br/>
        <label>Price: </label>
        <span><?php echo  $List_Price ?></span><br/>
        <label>Discount Percent: </label>
        <span><?php echo $Discount ?></span><br/>
        <label>Discount Amount: </label>
        <span><?php echo $Discount_Amount?></span><br/>
        <label>Discount Price: </label>
        <span><?php echo $Discount_Price?></span>
    </div>

</form>

</body>
</html>