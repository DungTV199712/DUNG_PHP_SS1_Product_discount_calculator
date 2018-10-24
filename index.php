<!DOCTYPE HTML>
<html>
<style type="text/css">
    .login {
        height:200px; width:400px;
        margin:1px 42%;
        padding:5px;
        border:1px mediumblue solid;
    }
    .login input {
        padding:5px; margin:1px
    }
    h2 {
        color: darkblue;
    }
</style>
<body>

<form action="Product.php" method="post">
    <div class="login">
        <h2>Product Discount Calculator</h2>
        <label>Product Description: </label>
        <input type="text"  size="30" name="PD" placeholder=" " /><br/>
        <label>List Price: </label>
        <input type="text" size="30" name="List" placeholder=" " /><br/>
        <label>Discount Percent: </label>
        <input type="text" size="30" name="Discount" placeholder=" " />
        <label>&nbsp;</label>
        <input type="submit" name="submit" value="Calculator Discount"/>
    </div>
</form>
</body>
</html>