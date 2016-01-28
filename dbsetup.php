<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>


    <script type='text/javascript'>//<![CDATA[
        $(window).load(function () {
            $(document).ready(function () {

                update_amounts();
                $('.qty').change(function () {
                    update_amounts();
                });
            });


            function update_amounts() {
                var sum = 0.0;
                $('#myTable > tbody  > tr').each(function () {
                    var qty = $(this).find('option:selected').val();
                    var price = $(this).find('.price').val();
                    var amount = (qty * price)
                    sum += amount;
                    $(this).find('.amount').text('' + amount);
                });
                //just update the total to sum    
            }
        });//]]> 

    </script>


</head>
<body>

<?php

$hostname = "artacre.db.10635241.hostedresource.com";
$username = "artacre";
$password = "Bayou!5246";
$dbname = "artacre";
$usertable = "products";
$yourfield = "name";


$mysqli = new mysqli($hostname, $username, $password, $dbname);

$con = mysqli_connect($hostname, $username, $password, $dbname) or die ("<html><script language='JavaScript'>
alert('Unable to connect to database! Please try again later.'))</script></html>");


/* return name of current default database */
$strSQL = "Select * From Products";
$result = mysqli_query($con, $strSQL); ?>


<table id="myTable">
    <thead>
    <tr>
        <th>Product name</th>
        <th>Qty</th>
        <th>Price</th>
        <th align="center"><span id="amount" class="amount">Amount</span></th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="2"></td>
        <td align="right"><span id="total" class="total">TOTAL</span></td>
    </tr>
    </tfoot>
    <tbody>
    <?php
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?=$row['Name']?></td>
        <td><select value="" class="qty" name="qty">
                <option value="1">1</option>
                <option value="2">2</option>
            </select></td>
        <td><input type="text" value="<?=$row['Price']?>" class="price"></td>
        <td align="center"><span id="amount" class="amount">0</span> eur</td>
    </tr>
    <?php
        }
    ?>

    </tbody>
</table>

</body>