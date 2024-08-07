<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="keywords">
    <title> EVENT </title>
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
            echo "<table style='width:90%; height:400px'> <tr> <td><h3>Event Title</h3></td> <td><h3>Event Description</h3></td> <td><h3>Date & Time</h3></td> <td><h3>Image</h3></td> </tr>";
            require_once('mysqli_conncet.php');
            $mysqli = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die('Could not connect to MySQL:'.mysqli_connect_error());
            $sql_readRecord = "SELECT * FROM events";
            $result_readRecord = mysqli_query($mysqli, $sql_readRecord); 
            if ($result_readRecord) {   
                 while ($row = mysqli_fetch_array($result_readRecord, MYSQLI_ASSOC)){      
                     echo "<tr align='left'><td><i>" . $row['event_title'] . "</i></td><td>" . $row['event_description'] . "</td><td width='20%'>" . $row['event_date_time']  . "</td><td>" . "<img width='200px' height='300px' src='" . $row['event_image1'] . "'></td></tr>"; 
                 }  
            }
            echo "</table>";      
         ?>
        </div>
        <div>
            
        </div>
    </section>
        
</body>	
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


