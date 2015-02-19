<?php  include("inc/products.php"); ?><?php 
$pageTitle = "5K Accessories";
$section = "shirts";
include('inc/header.php'); ?>

		<div class="section shirts page">

			<div class="wrapper">

				<h1>5K Accessories&rsquo;s Full Catalog of Rings</h1>

				<ul class="products">
					<?php foreach($products as $product_id => $product) { 
							echo "<li>";
							echo '<a href="shirt.php?id=' .$product_id . '">';
							echo '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
							echo "<p>View Details</p>";
							echo "</a>";
							echo "</li>";
						}
					?>
				</ul>

			</div>

		</div>

<?php include('inc/footer.php') ?>