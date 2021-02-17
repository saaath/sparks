<?php
include "connection.php";
 ?>
 <html>
 <head>
 	<title>Customers</title>
 	<link rel="stylesheet" type="text/css" href="Style.css">
 </head>
 <body>
 	<header>
 		<ul id="left">
 			<li><a href="login.php">💰BANK</a></li>
 		</ul>

 		<ul id="right">
             <li><a href="login.php" style="text-decoration:none;">Home</a></li>
<li><a href="customer.php">Customer details</a></li>
 		</ul>
 	</header>
     <section>
 	    <div class="sect_img">
         <div class="box3"><br><br><br>
          <h1 style="text-align: center; font-size: 30px">Create an account</h1><br><br>

          <form action="" method="post">
                 <div class="login">
                     <input class="form-control" type="text" name="name" placeholder="Name" required=""><br><br>
                     <input class="form-control" type="email" name="email" placeholder="Email" required=""><br><br>
                     <input class="form-control" type="text" name="Amount" placeholder="Amount" required=""> <br><br>
                     <button class="btn btn-default" type="submit" name="submit"> Create </button>
                 </div>
         </form>
         </div>


         <?php

         $name = isset($_POST['name']) ? $_POST['name'] : '';
         $email = isset($_POST['email']) ? $_POST['email'] : '';
         $amount = isset($_POST['Amount']) ? $_POST['Amount'] : '';
        if(isset($_POST['submit']))
        {
            $q1="INSERT INTO customer_details(Name,Email,Current_balance) VALUES ('$name','$email','$amount')";
            mysqli_query($db,$q1);
        ?>
        <script type="text/javascript">
         alert("Created Successfully");
        </script>

        <?php
        }
        ?>
         <br>
 </body>
 </html>
