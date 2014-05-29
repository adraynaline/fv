<?php 
include_once('model/home/home.php');
	$issue = show_issue();
	$pub = show_pub();
	$img_slider = show_img_slider();
	include_once('view/layout/header.home.php');
	include_once('view/home/index.php');
	include_once('view/layout/footer.home.php');
 ?>