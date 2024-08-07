<?php
	if(!empty($_POST)){
    		$studentID = $_POST['studentID'];
		$studentPassword = $_POST['studentPassword'];
		$studentName = $_POST['studentName'];

		//~~~~~~~~~~~~~validation
    		$error = array();
    		if ($studentID == null) {
      			$error['studentID'] = "";
    		}

    		if(empty($error)){
			//~~~~~~~~~~~~store in database
			require_once('mysqli_conncet.php');
			$mysqli = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die('Could not connect to MySQL:'.mysqli_connect_error());
			$sql_insertRecord = "INSERT INTO members (member_id, student_id, student_password, student_name) 
                                             VALUES ('', '$studentID', '$studentPassword', '$studentName')";
    			$result_insertRecord = mysqli_query($mysqli, $sql_insertRecord);

    			if ($result_insertRecord) { 
        			echo "<p><h2> <font color='blue'> Successful Registration. </font> </h2></p>";
    			} else {
        			echo "<p><h2> <font color='blue'> Unsuccessful Registration. </font> </h2></p>";
    			}
    			mysqli_close($mysqli);  	
			
			//Note: should block the registration if the student has registered
			//~~~~~~~~~~~~redirect to login page



    				   
    		} else {
			//~~~~~~~~~~~~display error message
			//~~~~~~~~~~~~sticky form	
    		}
	}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="keywords">
    <title> MEMBER REGISTRATION </title>
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
            <table>
              <tr><td>
                    <center><h2>MEMBER REGISTRATION</h2></center><hr>
                    <form action="register.php" method="post">
                    <p> [ <a href=""> LOGIN PAGE</a> ] </p>
                    <label for="studentID">Student ID:</label>
                    <input type="text" name="studentID" id="studentID" required>
                    <br><br>
                    <label for="studentPassword">Student Password:</label>
                    <input type="text" name="studentPassword" id="studentPassword" required>
                    <br><br>
                    <label for="studentName">Student Name:</label>
                    <input type="text" name="studentName" id="studentName" required> 	     
                    <br><br>
                    <button type="submit">SUBMIT</button>
                    <button type="reset">RESET</button>
                    </form>
              </td></tr>
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