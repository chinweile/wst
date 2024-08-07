<?php
    if (isset($_POST['studentID']) && isset($_POST['password'])) {      
    	$studentID = $_POST['studentID'];
	$password = $_POST['password'];
	
	//~~~~~~validation
    	if ($password == null) {
        	$error['$password'] = "";
    	}

    	if (empty($error)) {
		//~~~~~~read database and validate the studentID and password
        	require_once('mysqli_conncet.php');
		$mysqli = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die('Could not connect to MySQL:'.mysqli_connect_error());
		$sql_readRecord = "SELECT * FROM members WHERE student_id = $studentID";
		$result_readRecord = mysqli_query($mysqli, $sql_readRecord); 
		$count = 0;
		if ($result_readRecord) {           
			$row = mysqli_fetch_array($result_readRecord, MYSQLI_ASSOC);
			if (isset($row['student_id']) && isset($row['student_password']) && mysqli_num_rows($result_readRecord) == 1 && $row['student_password'] == $password) {
				$count++;	
				echo "Login Successfully" . "<br>";
				echo "Welcome " . $row['student_name'] . "<br>";
				//session_start();
				//$_SESSION['username'] = $row['student_name'];
				//header("Location:");
        			//exit();
			}  
	
			if ($count == 0) {   
				echo "Access Denied" . "<br>";
			}        

        	} else {
            		$error = "Invalid account.";
        	}

    	} else {
		//!empty($error)
	}
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="keywords">
    <title> MEMBER LOGIN </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css">
    
  
  <link rel="stylesheet" type="text/css" href="">  
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
            <table border="0" cellpadding="5">
            <tr>
                <td>
                    <center><h2>MEMBER LOGIN</h2></center><hr>
                    <form action="login.php" method="post">
                            <label>Student ID</label>
                            <input type="text" name="studentID" value=" ">
                            <br><br>
                            <label>Password</label>
                            <input type="password" name="password" value="">
                            <br><br>
                            <button type="submit">LOGIN</button>
                            <br><br>

                            <p>Please <a href="">register</a> if you don't have any account.</p>
                    </form>
                </td>
            </tr>  
            </table>
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