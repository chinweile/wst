<!DOCTYPE HTML>
<html>
    <head>
        <title>Home 1</title>
    </head>
    <body>
	<script></script>
	<h1> Home 1 </h1>
        <h4> Prevent accessing home2.php before visiting home1.php </h4>
        <h4> Now you can access home2.php by clicking the hyperlink below. </h4>
        <br>
	<section>
            <div>
            <?php
                    session_start();
                    $_SESSION['authenticate'] = "approved";		
            ?>
            </div>
        </section>
        
	<p> <a href="home2.php"> Go to Home2 </a> </p>
	

    </body>
</html> 
