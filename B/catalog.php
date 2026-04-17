<?php
session_start();

if(isset($_POST["Item"])){
    $_SESSION["Quantity"] = $_POST["Quantity"];
    $id = $_POST["Item"];
    $_SESSION["ID"] = $id;
    
    switch(strtoupper($id)){
        case "S001":
            $_SESSION["Name"] = "ipad air";
            $_SESSION["Price"] = "12000";
            break;
        case "S002":
            $_SESSION["Name"] = "Macbook Neo";
            $_SESSION["Price"] = "19980";
            break;
        case "S003":
            $_SESSION["Name"] = "iPhone";
            $_SESSION["Price"] = "21000";
            break;
    }
    header("Location: savecart.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>商品目錄</title>
</head>
<body>
    <h2>選購商品</h2>
    <form action="catalog.php" method="POST">
        選擇商品：
        <select name="Item" required>
            <option value="S001">ipad air - NT$12,000</option>
            <option value="S002">Macbook Neo - NT$19,980</option>
            <option value="S003">iPhone - NT$21,000</option>
        </select>
        <br><br>
        購買數量：
        <input type="number" name="Quantity" value="1" min="1" required>
        <br><br>
        <button type="submit">加入購物車</button>
    </form>
    <hr>
    <a href="shoppingcart.php">檢視購物車</a>
</body>
</html>