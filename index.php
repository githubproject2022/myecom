<?php require "header.php";


$new = mysqli_query($conn,"SELECT * FROM products WHERE tag = 'new' order by rand() limit 8 ");
$top = mysqli_query($conn,"SELECT * FROM products WHERE tag = 'top'  order by rand() limit 8 ");
$sale = mysqli_query($conn,"SELECT * FROM products WHERE tag = 'sale' order by rand() limit 4 ");

?>

<div class="container banner">
	<img src="img/banner.jpg" alt="">
</div>	

<div class="new-arival">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="heading">
					New Arivals
				</h1>
			</div>	

			<?php while($n = mysqli_fetch_array($new)):?>	
			<div class="col-lg-3 product col-6  py-3">
				<a href="" title="">
					<div class="product-area">
						<img src="img/<?=$n['img']?>" alt="" class="img-fluid">
						<p><?=$n['name']?></p>
						<h4>$<?=$n['price']?></h4>	
					</div>
				</a>	
			</div>
			<?php endwhile ?>

		</div>	
	</div>
</div>


<div class="top-selling mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="heading">
					top Selling
				</h1>
			</div>	

			<?php while($t = mysqli_fetch_array($top)):?>	
			<div class="col-lg-4 product  py-3">
				<a href="" title="">
					<div class="product-area">
						<img src="img/<?=$t['img']?>" alt="" class="img-fluid">
						<p><?=$t['name']?></p>
						<h4>$<?=$t['price']?></h4>	
					</div>
				</a>	
			</div>
			<?php endwhile ?>	
			
		</div>	
	</div>
</div>


<div class="top-selling mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="heading">
					ON sale
				</h1>
			</div>	

			<?php while($s = mysqli_fetch_array($sale)):?>	
			<div class="col-lg-6 product  py-3">
				<a href="" title="">
					<div class="product-area">
						<img src="img/<?=$s['img']?>" alt="" class="img-fluid">
						<p><?=$s['name']?></p>
						<h4>$<?=$s['price']?></h4>	
					</div>
				</a>	
			</div>
			<?php endwhile ?>


		</div>	
	</div>
</div>

<?php require "footer.php" ?>