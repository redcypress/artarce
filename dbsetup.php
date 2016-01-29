<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">


    <script type='text/javascript'>
        var sum = 0.0;
        var sum1 = 0.0;


        $(window).load(function () {
            $(document).ready(function () {
                update_amounts();
                $('.qty1').change(function () {
                    update_amounts();
                });
                $('.qty').change(function () {
                    update_amounts();

                });
            });
           // var $logo = $('#logo-scroll');
            //$(document).scroll(function () {
              //  $logo.css({display: $(this).scrollTop() > 100 ? "block" : "none"});
            //});

            function update_amounts() {
                                    var sum = 0.0;
                                    var sum1 = 0.0;

                $('#myTable1 > tbody  > tr').each(function () {
                     var qty = $(this).find('option:selected').val();
                    var price = $(this).find('.price1').val();
                    var amount = (qty*price)
                    sum+=amount;
                    $(this).find('.amount').text(''+amount);
                });
                 $('#products > tbody  > tr').each(function () {
                    var qty = $(this).find('option:selected').val();
                    var price = $(this).find('.price').val();
                    var amount = (qty*price)
                    sum1+=amount;
                    $(this).find('.amount').text(''+amount);
                });
                
                

                $('.total').text('' + sum);
                $('.total1').text(sum1);

                //just update the total to sum
            }
            

        });

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


<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" id="producttable">
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
                            
<table id="myTable1">
    <thead>
        <tr><th>Product name</th><th>Qty</th><th>Price</th>
    <th align="center"><span id="amount" class="amount">Amount</span> </th></tr>
    </thead>
    <tfoot>
        <tr><td colspan="2"></td><td align="right"><span id="total" class="total">TOTAL</span> </td></tr>
    </tfoot>
    <tbody>
    
    <tr><td>Product 1</td><td><select value="" class="qty1" name="qty1">
        <option value="1">1</option>
        <option value="2">2</option>
</select></td><td><input type="text" value="11.60" class="price1"></td>
<td align="center"><span id="amount" class="amount">0</span> </td></tr>
    <tr><td>Product 2</td><td><select value="" class="qty1" name="qty1">
<option value="1">1</option>
<option value="2">2</option>
</select></td><td><input type="text" value="15.26" class="price1"></td>
<td align="center"><span id="amount" class="amount">0</span> eur</td></tr>
        
</tbody></table>

                            <table id="products" width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tbody>
                                <tr>
                                    <td colspan="2" class="style26">
                                        

                                        <span class="style6"><strong><a name="vegetables"
                                                                                                    id="vegetables"></a>LOCAL
                                                ORGANIC VEGETABLES &amp; FRUIT: <br>
                                            </strong></span></td>
                                </tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    if ($row['Name']!=""):
                                    ?>
                                    <tr>
                                        <td><?=$row['Name']?></td>
                                        <td><select value="" class="qty" name="qty">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select></td>
                                        <td><input type="text" value="2.0" class="price"></td>
                                        <td align="center"><span id="amount" class="amount">0</span></td>
                                    </tr>
                                    <?php
                                    endif;
                                }
                                ?>
                                        <p><span id="total" class="total1">TOTAL</span></p>

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
   
    </tbody>
</table>

</body>