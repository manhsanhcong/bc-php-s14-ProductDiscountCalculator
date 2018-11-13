<!DOCTYPE HTML>
<html>
<style type="text/css">
    .login {
        height: 300px;
        width: 320px;
        margin: 1px 42%;
        padding: 10px;
        border: 2px darkblue solid;
    }

    .login input {
        padding: 5px;
        margin: 5px;
    }

    h2 {
        color: darkblue;
    }
</style>
<body>

<form action="/discount" method="post">
    <p>@csrf</p>
    <div class="login">
        <h2>Product Discount Calculator</h2>
        Product Description:<input type="text" size="30" name="PD" placeholder="PD"/><br/>
        List Price:<input type="text" size="30" name="List" placeholder="List"/><br/>
        Discount Percent:<input type="text" size="30" name="Discount" placeholder="Discount"/>
        <input type="submit" name="submit" value="Calculator Discount"/>
    </div>
</form>
</body>
</html>
