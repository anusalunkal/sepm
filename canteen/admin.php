<!DOCTYPE html>
<html lang="zxx">
<?php
require "sqlcon.php";
if(isset($_POST['submit11']))
	{
		$pr1=$_POST['uname'];
		$pr2=$_POST['price'];
		$pr3=$_POST['disount'];
		$pr4=$_POST['type'];
	
		$sql="insert into product  (pname,price,pprice,pid) values('$pr1','$pr2','$pr3','$pr4');";
		mysqli_query($con,$sql);
		echo "Product Added succesfully";
	}
	if($_GET["del"]==1)
	{
		$sq1="delete from product ";
		mysqli_query($con,$sq1);
		header('location:admin.php');
	}
?>


<head>
	<title>MITS CANTEEN</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- top-header -->
	<div class="header-most-top">
		<p>MITS CANTEEN ONLINE FOOD ORDER</p>
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="index.html">
						<span>M</span>ITS
						<span>C</span>ANTEEN
						<img src="images/logo2.png" alt=" ">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			
			<div class="clearfix"></div>
		</div>
	</div>
	<table>
	<caption>ADD ITEMS</caption>
	<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 75%;
	text-align: centre;
	border-align: centre;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
	<form method="POST">
	<th>Product Name</th>
	<th>Price</th>
	<th>Discount</th>
	<th>Type</th>
	<tr>
	<td>     <input type="text"  name="uname" required></td>

	<td>     <input type="text"  name="price" required></td>

	<td>     <input type="text"  name="disount" required></td>

	<td>     <input type="text"  name="type" required></td></tr>
	<tr>
	<td>
<input type="submit" name="submit11" value="Submit">
</td></tr>
</table>
</form>
<br>
<br>
<br>
<br>
<table>
<caption>TYPE AND NUMBERS</caption>
<th>Type</th>
<th></th>
<th>Category</th>
<tr>
<td>1</td>
<td> </td>
<td>Breakfast</td>
</tr>
<tr>
<td>2</td>
<td> </td>
<td>Lunch</td>
</tr>
<tr>
<td>3</td>
<td> </td>
<td>Curry</td>
</tr>
<tr>
<td>4</td>
<td> </td>
<td>Special Offer</td>
</tr>
</table>
<br>
<br>
<br>
<table>
<caption>TODAY'S MENU</caption>
<th>Product Name</th>
<th>Price</th>
<th>Discount</th><th>Type</th>
<?php 

	$sqr="select * from product ";
	$var11=mysqli_query($con,$sqr);
	while($dc=mysqli_fetch_array($var11))
	{ 
?>

<tr>
<td><?php echo $dc['pname'];?></td>
<td><?php echo $dc['price'];?></td>
<td><?php echo $dc['pprice'];?></td>
<td><?php echo $dc['pid'];?></td>
</tr>
<tr>
</tr>
	<?php }?>
	<td><a href="admin.php?del=1">Delete</a></td>
</table>
<table>
<caption>FEEDBACK TABLE</caption>
<th>Feedbacks</th>
<br>
<br>

<?php $sqr="select * from feedback ";
	$var11=mysqli_query($con,$sqr);
	while($dc=mysqli_fetch_array($var11))
	{ ?>
<tr>
<td><?php echo $dc['feed'];?></td><br>
<td></td>
</tr>
	<?php }?>
</table>
<table>
<caption>CODE GENERATOR TABLE</caption>
<th>Coupon Code</th>
<br>
<br>

<?php $sqr="select * from coupon ";
	$var11=mysqli_query($con,$sqr);
	while($dc=mysqli_fetch_array($var11))
	{ ?>
<tr>
<td><?php echo $dc['ccode'];?></td><br>
<td></td>
</tr>
	<?php }?>
</table>