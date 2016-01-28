<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">


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
                $('.total').text('' + sum);
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
            <td><?= $row['Name'] ?></td>
            <td><select value="" class="qty" name="qty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select></td>
            <td><input type="text" value="<?= $row['Price'] ?>" class="price"></td>
            <td align="center"><span id="amount" class="amount">0</span></td>
        </tr>
        <?php
    }
    ?>

    </tbody>
</table>


<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
    <tbody>
    <tr>
        <td height="117" colspan="8">
            <img src="images/New-Buckwheat_02.png" width="800" height="117" alt=""></td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td height="67" colspan="2">
            <a href="index.html"><img src="images/nav_04.png" alt="" width="275" height="67" border="0"></a></td>
        <td height="67" colspan="3">
            <img src="images/nav_05.png" width="257" height="67" alt=""></td>
        <td height="67" colspan="3">
            <a href="location.html"><img src="images/New-Buckwheat_06.png" alt="" width="268" height="67"
                                         border="0"></a></td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td height="237" colspan="8">
            <p>&nbsp;</p>
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td width="537" height="220" align="center" valign="middle"><p class="style29">Next Order Day:</p>

                        <p><strong>Orders are usually ready for pick up by the Tuesday at 5pm and Wednesday morning
                                following the order deadline.</strong></p>
                        <blockquote>
                            <p>Pick-Up your order in Knowlesville at the Knowlesville Art &amp; Nature Centre at 111
                                Simms Road (call 375-8623) or request local delivery option.<br>
                            </p>
                        </blockquote>
                        <p><em>Delivery available upon request. Delivery fee of $3 for deliveries to Florenceville,
                                Hartland or Woodstockapply.</em></p>

                        <p>&nbsp;</p></td>
                    <td width="173" align="left" valign="top" class="date">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>
                                    <center>
                      <span class="style4"><span class="style2">Friday</span><br>
                      <span class="style31">October</span></span>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>
                                        <span class="style4"><span class="style3">23</span></span>
                                    </center>


                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                    <td align="left" valign="top">&nbsp;</td>
                </tr>
                </tbody>
            </table>

            <table width="700" border="3" align="center" cellpadding="0" bordercolor="#FFCC00" bgcolor="#FFFFFF">
                <tbody>
                <tr>
                    <td valign="top">
                        <form action="send.php" method="post" name="orderform" id="orderform">
                            <p>&nbsp;&nbsp;</p>

                            <p><img src="images/orderform.png" width="242" height="65">
                            </p>
                            <table width="95%" align="center" cellpadding="5" cellspacing="0">
                                <tbody>
                                <tr>
                                    <th width="100%" align="left" scope="col"><p align="left">
                                            <label for="Name">Name</label>
                                            <input name="Name" type="text" class="required" id="Name" size="100"
                                                   style="cursor: auto; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat;">
                                            <span class="style6">*</span>
                                        </p>

                                        <p>
                                            <label for="Email"> Email:</label>
                                            <input name="Email" type="text" class="required" id="Email">
                                            <span class="style6">*</span></p>
                                        <label for="Phone">
                                            Phone:</label>
                                        <input name="Phone" type="text" class="required" id="Phone">
                                        <span class="style6">*</span>

                                        <p>Deliver to Address:<span class="style6">*</span>
                                            <input name="Address" type="text" class="required" id="Address" size="75%">
                                        </p></th>
                                </tr>
                                </tbody>
                            </table>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tbody>
                                <tr>
                                    <td colspan="2" class="style26"><span class="style6"><strong><a name="vegetables"
                                                                                                    id="vegetables"></a>LOCAL
                                                ORGANIC VEGETABLES &amp; FRUIT: <br>
                                            </strong></span></td>
                                </tr>
                                <tr>
                                    <td class="table-border">Fresh Music Garlic</td>
                                    <td class="table-border-right">$2/large head
                                        <select name="HS_Garlic" id="HS_Garlic">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="table-border">Carrots</td>
                                    <td class="table-border-right">$3.00/2lb
                                        <select name="VN_Carrots_2lb" id="VN_Carrots_2lb">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        &nbsp;$5.00/4lb
                                        <select name="VN_Carrots_4lb" id="VN_Carrots_4lb">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="table-border">Beets</td>
                                    <td class="table-border-right">$3.00/2lb
                                        <select name="VN_Beets_2lb" id="VN_Beets_2lb">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="table-border">Knowlesbee Orchards Organic Apples</td>
                                    <td class="table-border-right">
                                        <p>$4.00/2lb&nbsp;&nbsp;$6.50/5lb<br>
                                            Nova Macs
                                            <select name="Hutlo_Apples_NBers" id="Hutlo_Apples_NBers">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="style26"><strong><a name="juice" id="juice2"></a>ORGANIC
                                            ARTISANAL BREAD<br>
                                        </strong></td>
                                </tr>
                                <tr>
                                    <td class="table-border">Sourdough Heritage Whole Wheat<br>
                                        <span class="style14">(made with Organic Stoneground Red Fife  Whole Wheat, no sugar or sweetner added)</span><br>
                                    </td>
                                    <td class="table-border-right">$5/loaf
                                        <select name="TWD_WWbread" id="TWD_WWbread">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="table-border"><p>Light Rye Bread<br>
                                            <span class="style14">(made with Organic Stone Ground Flousr from Speerville, naturally sweetned  mollasses and lightly spiced with carroway seed)</span><br>
                                        </p></td>
                                    <td class="table-border-right">$5/loaf
                                        <select name="TWD Light Rye Bread" id="TWD Light Rye Bread">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="table-border"><p>Sourdough Spelt Bread<br>
                                            <span class="style14">(made with 100% Whole Spelt flour and lightly sweetened with honey)</span>
                                        </p></td>
                                    <td class="table-border-right">$6/loaf
                                        <select name="TWD Sourdough Spelt Boule2" id="TWD Sourdough Spelt Boule3">
                                            <option value="0">0</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="table-border"><span class="style4">New!</span> Whole Spelt Dough - great
                                        for homemade pizza crusts, rolls, tortillas or bagels. Sold Frozen. <span
                                            class="style9">Made with 100% Organic Spelt Flour</span></td>
                                    <td class="table-border-right">$3.99/400g
                                        <select name="TWD Spelt Dough 400g2" id="TWD Spelt Dough 400g3">
                                            <option value="0" selected="">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        Family size $5.99/700g
                                        <select name="TWD Spelt Dough 700g2" id="TWD Spelt Dough 700g3">
                                            <option value="0" selected="">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                </tbody>
                            </table>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tbody>
                                <tr>
                                    <td colspan="2" class="style26"><strong>LOCAL MEAT <br>
                                        </strong></td>
                                </tr>
                                <tr>
                                    <td class="table-border"><p>Whole Chicken fed with 100% Organic Feed from Speckled
                                            Hen Farm in Knowlesville <span class="style9">(hormone and antibiotic free too)</span>
                                        </p></td>
                                    <td class="table-border-right">
                                        <p>$4.25/lb (average size approx. 5lb)
                                            <select name="Speckled Hen Chicken" id="Speckled Hen Chicken">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="style26"><p><strong>ORGANIC WHEAT FLOURS :</strong></p></td>
                                </tr>
                                <tr>
                                    <td class="table-border">Unbleached Whole White Flour<br></td>
                                    <td class="table-border-right"><label for="label65">$7.85/5lb</label>
                                        <select name="Unbleached White 5lb2" id="label65">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <label for="select2"></label>
                                        <label for="label66">$34.50/11.3kg</label>
                                        <select name="Unbleached White 11.34kg" id="Unbleached White 11.34kg">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <br>
                                        $70.60/25kg
                                        <select name="Unbleached White 25kg2" id="Unbleached White 25kg">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="table-border">Whole Wheat Flour<br></td>
                                    <td class="table-border-right"><label for="label63">$7.50/5lb</label>
                                        <select name="Org_WWheat_Flour_2.27kg2" id="label63">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <label for="select2"></label>
                                        <label for="label64">$28.80/10kg</label>
                                        <select name="Org_WWheat_Flour_10kg2" id="label63">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        &nbsp;<br>
                                        $68.80/25kg
                                        <select name="Org_WWheat_Flour_25kg2" id="Org_WWheat_Flour_25kg">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="table-border">Heritage Red Fife Bread Flour<br></td>
                                    <td class="table-border-right"><label for="label61">$7.80/5lb</label>
                                        <select name="RedFife Flour 5lb2" id="label61">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <label for="select2"></label>
                                        <label for="label62">$29.90/10kg</label>
                                        <select name="RedFife Flour 10kg" id="label61">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="table-border">Whole Rye Flour <br></td>
                                    <td class="table-border-right"><label for="label13">$6.90/5lb</label>
                                        <select name="Rye Flour 5lb" id="label13">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <label for="select2"></label>
                                        <label for="label56">$25.80/10kg</label>
                                        <select name="Rye Flour 10kg" id="label13">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="table-border">Whole Wheat Pastry Flour</td>
                                    <td class="table-border-right">$7.85/5lb
                                        <select name="PastryWheatFlour 5lb" id="PastryWheatFlour 5lb">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        &nbsp;$28.95/10kg
                                        <select name="PastryWheatFlour 10kg" id="PastryWheatFlour 10kg">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="style26"><p><strong>ORGANIC LOW GLUTEN &amp; SPECIALTY FLOURS
                                                :</strong></p></td>
                                </tr>
                                <tr>
                                    <td class="table-border">Brown Rice Flour</td>
                                    <td class="table-border-right">$11.95/5lb
                                        <select name="BrownRiceFlour 5lb" id="BrownRiceFlour 5lb">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="table-border">Buckwheat Flour</td>
                                    <td class="table-border-right">$4.50/2lb
                                        <select name="Buckwheat Flour 910g2" id="Buckwheat Flour 910g2">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="table-border">Corn Flour</td>
                                    <td class="table-border-right">$9.50/5lb
                                        <select name="CornFlour 5lb" id="CornFlour 5lb">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="table-border">Kamut Flour</td>
                                    <td class="table-border-right"><label for="label3">$8.90/5lb</label>
                                        <select name="KamutFlour 5lb" id="label3">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <label for="select2"></label>
                                        <label for="label54">$33.20/10kg</label>
                                        <select name="Kamut Flour 10kg" id="label3">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="table-border">Whole Spelt Flour<br></td>
                                    <td class="table-border-right"><label for="label7">$9.80/5lb</label>
                                        <select name="Spelt Flour 5lb2" id="label7">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <label for="select2"></label>
                                        <label for="label60">$31.90/10kg</label>
                                        <select name="Whole Spelt Flour 10kg" id="label7">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                </tbody>
                            </table>
                            
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tbody>
                                <tr>
                                    <td colspan="2" valign="top" class="style26"><strong><a name="sweet"></a>ORGANIC NUT
                                            BUTTERS &amp; CONDIMENTS</strong></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="table-border"><p><em>Naturally Nutty Nut Butters:<br>
                                            </em>Peanut Butter <br>
                                        </p></td>
                                    <td class="table-border-right">
                                        <p>Smooth $6.60/500g
                                            <select name="Peanut Butter 500g Smooth2" id="Peanut Butter 500g Smooth2">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            Smooth $42.50/4kg
                                            <select name="Peanut Butter 4kg Smooth2" id="Peanut Butter 4kg Smooth2">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <br>
                                            Crunchy $6.60/500g
                                            <select name="Peanut Butter 500g Crunchy2" id="Peanut Butter 500g Crunchy2">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            Crunchy $42.50/4kg
                                            <select name="Peanut Butter 4kg Crunchy" id="Peanut Butter 4kg Crunchy">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <br>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" class="table-border">Almond Butter <br></td>
                                    <td class="table-border-right">$9.60/240g
                                        <select name="Almond Butter2" id="Almond Butter2">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="table-border">Sesame Tahini</td>
                                    <td class="table-border-right">$4.50/240g
                                        <select name="Tahini 240g2" id="Tahini 240g2">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        &nbsp;$8.90/500g
                                        <select name="Tahini 500g2" id="Tahini 500g2">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                </tr>
                                </tbody>
                            </table>
                            <p>&nbsp;</p>
                            <blockquote>
                                <p class="style27">Comments</p>

                                <p>Do you want something from Speerville Mill that is not listed? Please write it in the
                                    comments section and we will add it to your order. Download a full <a
                                        href="http://www.speervilleflourmill.ca/catalog_web.pdf" target="_blank">Speerville
                                        Mill Product list</a> and learn more about the history of the mill too! Add any
                                    product suggestions as well. We'll do our best to add them: </p>
                            </blockquote>
                            <p align="center">
                                <textarea name="message" cols="80" rows="6" id="comments"></textarea>
                            </p>
                            <span class="style8">Please check one:</span>

                            <p>
                                <input name="Pick up Details" type="radio" id="Jan23order6"
                                       value="Pick up in Knowlesville" checked="">
                                Pick up at the Knowlesville Art &amp; Nature School<br>
                                <input name="Pick up Details" type="radio" id="Jan23order4"
                                       value="Home Delivery to Florenceville area">
                                Special Delivery to Florenceville, Bristol, Glassville, Knowlesville, Mount Pleasant,
                                Bath areas <br>
                                <input name="Pick up Details" type="radio" id="Jan23order5"
                                       value="Home Delivery for Hartland-Woodstock area">
                                Special Delivery to Coldstream, Hartland, Woodstock areas </p>

                            <p>&nbsp;</p>

                            <p align="center">
                                <input type="image" src="images/submit.png" width="149" height="56" value="Send Order">
                            </p>

                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td colspan="8" valign="top">
            <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td width="71%">&nbsp;</td>
                    <td width="29%">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <p>Buckwheat Flats Natural Foods - <a href="mailto:realfood@back2land.ca">realfood@back2land.ca</a>
                            </p>

                            <p>&nbsp;  </p>
                        </center>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <img src="images/spacer.gif" width="171" height="1" alt=""></td>
        <td>
            <img src="images/spacer.gif" width="104" height="1" alt=""></td>
        <td>
            <img src="images/spacer.gif" width="38" height="1" alt=""></td>
        <td>
            <img src="images/spacer.gif" width="171" height="1" alt=""></td>
        <td>
            <img src="images/spacer.gif" width="48" height="1" alt=""></td>
        <td>
            <img src="images/spacer.gif" width="73" height="1" alt=""></td>
        <td>
            <img src="images/spacer.gif" width="92" height="1" alt=""></td>
        <td>
            <img src="images/spacer.gif" width="103" height="1" alt=""></td>
    </tr>
    </tbody>
</table>

</body>