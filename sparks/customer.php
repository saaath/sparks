<?php
   include "connection.php";
   $query="select Name,Email,Current_balance from customer_details";
   $result=mysqli_query($db,$query);
?>
<!DOCTYPE html>
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
			<li><a href="login.php">Home</a></li>
      	<li><a href="add_customer.php">Create User</a></li>
			<li><a href="transfer.php">Transfer Amount</a></li>
			<li><a href="view_transact.php">View transactions</a></li>
		</ul>
	</header>
    <section>
	    <div class="s_img">
	    <div class="box2">
        <br>

    	<table align="center" border="2px" style="width: 700px; border-collapse: collapse;   color: black; line-height: 40px; text-align: center;">
            <tr style="font-size: 20px">
    			<th colspan="3"><h2>CUSTOMER DETAILS</h2></th>
    		</tr>
    		<tr style="font-size: 20px">
    			<th style="width: 200px"> NAME </th>
    			<th style="width: 200px"> EMAIL </th>
    			<th> CURRENT BALANCE </th>
    		</tr>
    		<?php
    		    while($rows=mysqli_fetch_assoc($result))
    		    {
    		?>
    		     <tr>
    		     	<td><?php echo $rows['Name']; ?></td>
    		     	<td><?php echo $rows['Email']; ?></td>
    		     	<td><?php echo $rows['Current_balance']; ?></td>
    		     </tr>
    		<?php
    		    }
    		 ?>

    	</table>



</body>
</html>
