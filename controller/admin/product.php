
<?php  
	define("PAGE_CSS" , "product");
	include_once('model/admin/product.php');
	$id = $_GET['id'];
	$products = show_products($id);
	
	include_once('view/layout/header.admin.php');
	include_once('view/admin/product.php');
	include_once('view/layout/footer.admin.php');
?>