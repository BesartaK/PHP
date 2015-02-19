<?php include("inc/products.php");

if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
	if (isset($products[$product_id])) {
		$product = $products[$product_id];
	}
}
if (!isset($product)) {
	header("Location: shirts.php");
	exit();
}

$section = "shirts";
$pageTitle = $product["name"];
include("inc/header.php"); ?>

		<div class="section page">

			<div class="wrapper">

				<div class="breadcrumb"><a href="shirts.php">Rings</a> &gt; <?php echo $product["name"]; ?></div>

				<div class="shirt-picture">
					<span>
						<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
					</span>
				</div>

				<div class="shirt-details">

					<h1><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?></h1>

					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="<? php echo $product["paypal"];?>">
					<input type="hidden" name="item_name" value="<?php $product["name"]; ?>">
                 <table>
           <tr>
	          <th>
	            <input type="hidden" name="on0" value="Colors">
	           <label for="os0">Colors</label>
	         </th>
	         <td><select name="os0" id="os0">
			    <option value="White">White </option>
			    <option value="Red">Red </option>
			    <option value="Pink">Pink </option>
			    <option value="Orange">Orange</option>
              </select>
             </td>
           </tr>
</table>
<input type="submit" value="Add to Cart"  name="submit">

</form>

					</form>

					<p class="note-designer">* 5K Accessories</p>

				</div>

			</div>

		</div>

<?php include("inc/footer.php"); ?>