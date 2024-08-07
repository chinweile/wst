<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="keywords">
    <title> HOME </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css">
  
  
</head>
<body>
    <header>
        <div class="logo">
            <a><img src="Music.png" alt="Music"></a>
        </div>
        <nav class="horizontal">
            <ul class="mainmenu">
            <li><a href="tr_aboutus.html"class="submenuTitle">Members</a></li>
            <li><a href="#"class="submenuTitle">Events &#9654;</a>
            <ul class="submenu">
                <li><a href="tr_top.html">Top</a></li>
                <li><a href="tr_bottom.html">Bottom</a></li>
                <li><a href="tr_dress.html">Dress</a></li>
                <li><a href="tr_formalwear.html">Formal Wear</a></li>
                <li><a href="tr_fashionTrends.html">Fashion Trends</a></li>
            </ul></li>
            <li><a href="#"class="submenuTitle">Register &#9654;</a>
            <ul class="submenu">
                <li><a href="tr_membership.html">Membership</a></li>
                <li><a href="tr_FAQ.html">FAQ</a></li>
                <li><a href="tr_gifts.html">Flowers & Gifts</a></li>
                <li><a href="tr_feedback.html">Review</a></li>
            </ul>
            </li>
            <li><a href="#"class="submenuTitle">Buy Now &#9654;</a>
            <ul class="submenu">
                <li><a href="tr_cart.html">Add to Cart</a></li>
                <li><a href="tr_payment.html">Payment</a></li>
                <li><a href="tr_delivery.html">Product Delivery</a></li>
            </ul
            ></li>
        </ul>
        </nav>
    </header>
    
    <section>
        <div>
        <?php
                if ($_GET['status'] == 'A'){
                        include('adminHeader.html');
                } 
                else if ($_GET['status'] == 'M') {
                        include('memberHeader.html');
                }
        ?>
        </div>
    </section>
<h3> Homepage </h3>

<body>
<footer>  
    <nav class="navi">
        <p class="help">HELP</p>
        <a href="tr_aboutus.html">About Us</a>
        <a href="tr_feedback.html">Customer Feedback & Review</a>
        <a href="tr_FAQ.html">FAQ</a>
        <a href="tr_payment.html">Payment</a>
     </nav>
</footer>
</html>