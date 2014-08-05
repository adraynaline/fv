<?php  
	define("PAGE_CSS" , "issue");
	include_once('model/home/issue.php');
	$issue = show_issue();
	$older_issue = older_issue();
	include_once('view/layout/header.admin.php');
	include_once('view/home/issue.php');
	include_once('view/layout/footer.admin.php');
?>